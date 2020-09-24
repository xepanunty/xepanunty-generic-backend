<?php


namespace App\External\Services;


class HiPayService
{

    public function __construct()
    {
        // not used
        $config = new \HiPay\Fullservice\HTTP\Configuration\Configuration(['apiUsername' => env('HIPAY_USER'), 'apiPassword' => env('HIPAY_PASS')]);
        $clientProvider = new \HiPay\Fullservice\HTTP\SimpleHTTPClient($config);
        $gatewayClient = new \HiPay\Fullservice\Gateway\Client\GatewayClient($clientProvider);

    }

}