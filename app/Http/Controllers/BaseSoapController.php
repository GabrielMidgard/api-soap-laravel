<?php
namespace App\Http\Controllers;

class BaseSoapController extends Controller
{
    protected static $options;
    protected static $context;
    protected static $wsdl;

    public function __construct() {
    }

    public static function setWsdl($service) {
        return self::$wsdl = $service;
    }

    public static function getWsdl(){
        return self::$wsdl;
    }

    protected static function generateContext(){
        self::$options = [
            'http' => [
                'user_agent' => 'PHPSoapClient'
            ]
        ];
        return self::$context = stream_context_create(self::$options);
    }

    public function loadXmlStringAsArray($xmlString)
    {
        $array = (array) @simplexml_load_string($xmlString);
        if(!$array){
            $array = (array) @json_decode($xmlString, true);
        } else{
            $array = (array)@json_decode(json_encode($array), true);
        }
        return $array;
    }
}
