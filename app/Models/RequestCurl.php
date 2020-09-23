<?php

namespace App\Models;

use App\External\Services\Services;

class RequestCurl
{

    /*
    *
    * Checking if cache file exist
    * @ param string $name cache file name
    *
    */
    private function _checkCacheAvailable($name)
    {
        if ($this->enableCache) {
            $cachefile = $this->cacheLocation . $name;
            $cachetime = 5 * 60; //5 min
            if (file_exists($cachefile) && (time() - $cachetime < filemtime($cachefile))) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /*
    *
    * Reading cache file
    * @ param string $name cache file name
    *
    */
    private function _readCache($name)
    {
        $cachefile = $this->cacheLocation . $name;
        $output = file_get_contents($cachefile, FILE_USE_INCLUDE_PATH);
        return $output;
    }


    /*
    *
    * Writing cache file with contents
    * @ param string $name cache file name
    * @ param string $content cache content to write on cache file
    *
    */
    private function _writeCache($name, $content)
    {
        if ($this->enableCache) {
            $cachefile = $this->cacheLocation . $name;
            $fp = fopen($cachefile, 'w');
            fwrite($fp, $content);
            fclose($fp);
        }
    }

    /*
    *
    * @ param string $data Full html content which you want to parse
    * @ param string $s_tag Start tag of html content
    * @ param string $e_tag End tag of html content
    * @ return middle html content from given start tag and end tag of $data
    * */
    private function _getValueByTagName($data, $s_tag, $e_tag)
    {
        $pos = strpos($data, $s_tag);
        if ($pos === false) {
            return '';
        } else {
            $s = strpos($data, $s_tag) + strlen($s_tag);
            $e = strlen($data);
            $data = substr($data, $s, $e);
            $s = 0;
            $e = strpos($data, $e_tag);
            $data = substr($data, $s, $e);
            $data = substr($data, $s, $e);
            return $data;
        }
    }

    /*
    *
    * Reading curl get contents with cache support
    * @ param string $url target URL to be scrapped
    * @ param string $content of target URL in HTML
    *
    */
    private function _curl_get($url)
    {
        if ($this->enableCache) {
            $name = md5($url);
            if ($this->_checkCacheAvailable($name)) {
                return $this->_readCache($name);
            }
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);

        if ($this->enableCache) {
            $name = md5($url);
            $this->_writeCache($name, $data);
        }
        return $data;
    }

    /*
    getIndex method

    @return resource
    */
    public function getIndex($nif)
    {
        $nifOriginal = $nif;
        $this->enableCache = false;
        $this->cacheLocation = storage_path() . '/.cache/'; //You must needs to create this directory under storage/ of your Laravel app

        if (in_array(substr($nif, 0, 1), [5, 6])) {
            $url = Services::$justURICompany . $nif;
        } else {
            $url = Services::$justURI . $nif;
        }
        $content = $this->_curl_get($url);

        if (str_contains($content, "O NIF indicado não é válido e não encontramos resultados na pesquisa por nome em empresas.")) {
            return ['nif' => $nifOriginal, 'message' => trans('app.nifnotvalid'), 'type' => 'error'];
        }
        if (str_contains($content, "O NIF indicado é válido mas não conseguimos determinar a entidade associada.")) {
            return ['nif' => $nifOriginal,'message' => trans('app.nifvalidsubmitcertificate'), 'type' => 'warning'];
        }
        if (str_contains($content, "O NIF indicado é válido mas não conseguimos determinar a entidade associada.")) {
            return ['nif' => $nifOriginal, 'message' => trans('app.nifvalidsubmitcertificate'), 'type' => 'warning'];
        }
        //dd($content);

        $nif = $this->_getValueByTagName($content, "<h1 class='big-nif'>", '</h1>');
        $addressFIscal = $this->_getValueByTagName($content, "<span
class='search-title'>", '</span>');
        $codePostal = $this->_getValueByTagName($content, "<br/>", '<br/>');

        $codePostal2 = $this->_getValueByTagName($content, "<br/>", '<br/><br/>');

        $raciusLink = $this->_getValueByTagName($content, "</div></div> <a
href='", 'title');
        $raciusLink = trim(str_replace("/'", '', $raciusLink));

        $portugalio = $this->_getValueByTagName($content, "Financeira</a> <a
href='", 'title');
        $portugalio = trim(str_replace("/'", '', $portugalio));

        if(!empty($raciusLink)) {
            $content = $this->_curl_get($raciusLink);
            $raciusJson = $this->_getValueByTagName($content, '<script type="application/ld+json">', '</script>');
            $raciusJson = (trim($raciusJson));
            $raciusJsonExtracted = (json_decode($raciusJson, true));
        }

        if(!empty($portugalio)) {
            $content = $this->_curl_get($portugalio);
            $portugalioJson = $this->_getValueByTagName($content, '<script type="application/ld+json">', '</script>');
            $portugalioJson = (trim($portugalioJson));
            $portugalioJsonExtracted = (json_decode($portugalioJson, true));
        }

        if (!empty($nif) && !empty($addressFIscal) && !empty($codePostal) && !empty($codePostal2)) {
            return
                [   'nif' => $nifOriginal,
                    'message' => trans('app.nifok'), 'type' => 'success',
                    "data" => ['nif' => $nif, 'nif_desc' => $addressFIscal, 'codeP' =>
                        trim(str_replace("        ", '', str_replace($codePostal, '', str_replace("<br/>", '', $codePostal2)))),
                        'addF' => trim(str_replace(" NIF: ", '', $codePostal)),
                    "racius" => ["link" => $raciusLink, 'json' => isset($raciusJsonExtracted) ? $raciusJsonExtracted : []],
                    "portugalio" => ["link" => $portugalio, 'json' => isset($portugalioJsonExtracted) ? $portugalioJsonExtracted : []],
                ]];
        }
    }
}