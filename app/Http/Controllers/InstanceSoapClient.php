<?php
namespace App\Http\Controllers;
use SoapClient;

class InstanceSoapClient extends BaseSoapController implements InterfaceInstanceSoap
{
    public static function init(){
        $wsdlUrl = self::getWsdl();
        $soapClientOptions = [
            'stream_context' => self::generateContext(),
            'cache_wsdl'     => WSDL_CACHE_NONE
        ];
        return new SoapClient($wsdlUrl, $soapClientOptions);
    }
}