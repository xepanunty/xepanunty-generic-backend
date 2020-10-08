<?php

namespace App\External\Services;

class SendInBlueApi
{
    //   SendInBlueApi::sendinBlueEmail(["marcelo.t80@gmail.com"],  1, ['SOBRENOME' => "test" , 'NOME' => 'test', 'SMS' => "+351926608440"]);
    const ENABLE_BLUE_IN = true;

    /**
     * INVOICE TEMPLATES IDS
     * @var array
     */
    public static $TEMPLATES = [
        'INCOMEPORTUGAL_REGISTER_NEW' => 1,
        'INCOMEPORTUGAL_RECEIVED_EMAIL' => 2,
    ];

    /**
     * LANGUAGE CODES
     * @var array
     */
    protected static $LANGS_CODES = [
        1 => 'EN',
        2 => 'FR',
        3 => 'DE',
        4 => 'PT',
        5 => 'LU',
    ];




    /**
     * Send email based in one template
     * @param $pathToFile
     * @param $emailContact
     * @param $templateId
     * @param $dataR
     * @throws \SendinBlue\Client\ApiException
     */
    public static function sendinBlueEmail($emailContact, $templateId = false, $templateAttribuites = [], $internal = false, $pathToFile = false)
    {
        // send in blue API
        $config = \SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', env('YOUR_API_KEY_SEND_IN_BLUE'));

        $apiInstance = new \SendinBlue\Client\Api\AccountApi(
            new \GuzzleHttp\Client(),
            $config
        );
        try {
            $result = $apiInstance->getAccount();
        } catch (Exception $e) {
            echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
        }

        // IN CASE IS MULTIPLE EMAILS
        $api_instance = new  \SendinBlue\Client\Api\ContactsApi(new \GuzzleHttp\Client(), $config);
        foreach ($emailContact as $key => $email) {
            $create_contact = new \SendinBlue\Client\Model\CreateContact(['email' => $email, 'emailBlacklisted' => false, 'updateEnabled' => true,
                'attributes' => $templateAttribuites]); // see more if necessary
            try {
                $result = $api_instance->createContact($create_contact);
            } catch (\Exception $e) {
                //dd($e->getMessage());
            }
        }

        if (!empty($pathToFile)) {
            $data = [
                'emailTo' =>  $emailContact,
                'attachmentUrl' => $pathToFile

            ];
        } else {
            $data = [
                'emailTo' =>  $emailContact
            ];
        }
        if ($internal) {
            $data['replyTo'] =  "xepanunty@gmail.com";
            $data['emailCc'] =  "xepanunty+contact@gmail.com";
        }
        try {
            $apiInstance = new  \SendinBlue\Client\Api\TransactionalEmailsApi(
                new \GuzzleHttp\Client(),
                $config
            );
           // var_dump($data); die;
            // need send email for us or create a ticket service
            $emailSendExternal = new \SendinBlue\Client\Model\SendEmail($data);

            $result = $apiInstance->sendTemplate($templateId, $emailSendExternal);
            if (!empty($result->getMessageId())) {
                var_dump($result->getMessageId() . "EMAIL OK!");
            } else {
                var_dump("EMAIL ERROR!");
            }

        } catch (\Exception $e) {
            echo 'Exception send email external: ', $e->getMessage(), PHP_EOL;
        }
    }
}

