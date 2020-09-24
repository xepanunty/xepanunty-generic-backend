<?php
namespace App\Http\Controllers\Auth;

use App\External\Services\HiPayService;
use App\External\Services\SendInBlueApi;
use App\Rules\Nif;
use Backpack\CRUD\app\Http\Controllers\Auth\RegisterController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Backpack\CRUD\app\Library\Auth\RegistersUsers;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Validator;

class RegisterControllerOverride extends RegisterController
{
    protected $nif;

    public function __construct()
    {
        parent::__construct();
        $this->nif = new Nif();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();
        $users_table = $user->getTable();
        $email_validation = backpack_authentication_column() == 'email' ? 'email|' : '';
        $validator =  Validator::make($data, [
            'nif' => ["required", 'integer', "digits_between:9,9", 'unique:users',  $this->nif],
            'name'                             => 'required|max:80',
            backpack_authentication_column()   => 'required|'.$email_validation.'max:255|unique:'.$users_table,
            'password'                         => 'required|min:6|confirmed',
            //'phone'       => 'phone:PT,LU',
            'phone'       => 'phone:PT,mobile',
            'use_phone_in_transactions'         => 'required',
            'terms_and_conditions'         => 'required',
            'package' => 'required'
        ]);

        return $validator;
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        $user_model_fqn = config('backpack.base.user_model_fqn');
        $user = new $user_model_fqn();


        return $user->create([
            'name'                             => $data['name'],
            backpack_authentication_column()   => $data[backpack_authentication_column()],
            'password'                         => bcrypt($data['password']),
            'nif'                             => $data['nif'],
            'phone'                             => $data['phone'],
            'package'                             => $data['package'],
            'email'                             => $data['email'],
            'terms_and_conditions'             => $data['terms_and_conditions'] == 'on' ? 1 : 0,
            'use_phone_in_transactions'             => $data['use_phone_in_transactions']  == 'on' ? 1 : 0,
            'register_date'             => date("Y-m-d H:i:s"),
            'last_login'             => date("Y-m-d H:i:s"),
            'payment_date'             => date("Y-m-d H:i:s"),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        // if registration is closed, deny access
        if (! config('backpack.base.registration_open')) {
            abort(403, trans('backpack::base.registration_closed'));
        }

        $this->validator($request->all())->validate();


        $user = $this->create($request->all());

        event(new Registered($user));
        // send email account created or


        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }

}
