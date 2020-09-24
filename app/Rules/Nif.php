<?php

namespace App\Rules;

use App\Models\CompanyValidator;
use App\Models\RequestCurl;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class Nif implements Rule
{

    public $result = [];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //check if not exists in database already.
        $exists = CompanyValidator::where('nif', $value)->get()->last();
        if (empty($exists)) {
            $nifSubmitted = $value;
            $nifRequest = new RequestCurl();
            $this->result = $nifRequest->getIndex($nifSubmitted);
            $this->saveData( $this->result);

            // save
        } else {
            $this->result = json_decode($exists->json, true);
        }
        return isset($this->result['type']) && in_array( $this->result['type'], ['success', 'warning']);
    }

    private function saveData($result)
    {
        if(isset($result['nif'])) {
            $newCompany  = new CompanyValidator();
            $newCompany->nif =  (int)$result['nif'];
            $newCompany->json =  json_encode($result);
            $newCompany->save();
        }

    }



    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
       if(isset($this->result['type'])) {
           //var_dump($this->result); die;
           $message = "";
           switch ($this->result['type']) {
               case 'warning':
                   //$message = $this->result['message'];
                   break;
               case 'error':
                   $message = $this->result['message'];
                   break;
               case 'success' :
                  // $message = $this->result['message'];
                   break;
               default :
                   $message = $this->result['message'];
                   break;
           }
           return trans($message);
       }
    }
    /**
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param bool $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}
