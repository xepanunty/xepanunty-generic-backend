<?php
namespace App\Http\Controllers\Auth;

use Backpack\CRUD\app\Http\Controllers\Auth\RegisterController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;


class RegisterControllerOverride extends RegisterController
{

    public function __construct()
    {
        parent::__construct();
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
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

}
