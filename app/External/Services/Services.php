<?php


namespace App\External\Services;


class Services
{

    //https://ec.europa.eu/taxation_customs/vies/faq.html -> alterado para outros paises no futuro
    public $NIF_API = "https://www.nif.pt/?json=1&q={NIF_REPLACE}&key="; // this have one limit not good for us

    public static $justURI = "https://www.nif.pt/?q=";

    public static $justURICompany = "https://www.nif.pt/";


    //300435908
    //260502502
    //515523020
    //239134931
    //https://www.nif.pt/?q=300435908
    //https://www.nif.pt/515523020/
    public function __construct()
    {
        $this->NIF_API .= env('NIF_API');
    }

    /**
     * @return string
     */
    public function getNIFAPI(): string
    {
        return $this->NIF_API;
    }

    /**
     * @param string $NIF_API
     */
    public function setNIFAPI(string $NIF_API): void
    {
        $this->NIF_API = $NIF_API;
    }

}