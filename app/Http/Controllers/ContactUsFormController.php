<?php

namespace App\Http\Controllers;
use App\External\Services\SendInBlueApi;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Contact;
use Validator;

class ContactUsFormController extends Controller {


    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $formData = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
        $validator =  Validator::make($data, $formData);
        return $validator;
    }




    // Store Contact Form data
    public function ContactUsForm(ContactRequest $request) {

        // Form validation
        $isValid = $this->validator($request->all())->validate();
        if ($isValid) {
            Contact::create($request->all());

            $dateRequested = $request->all();

              SendInBlueApi::sendinBlueEmail([$dateRequested['email']],  2,
                  ['SOBRENOME' => $dateRequested['lname'] , 'NOME' =>$dateRequested['fname'], 'EMAIL' => $dateRequested['email'],
                      'SUBJECT' => $dateRequested['subject'],
                      'MESSAGE' => $dateRequested['message']], TRUE);

        }
        return back()->with('success', ('app.contacted_sucess_email_send_via_teamplete'));
    }

}