<?php
namespace App\Http\Controllers;

class SoapServiceController extends BaseSoapController //servicios-soap 
{
    private $service;

    public function ServiceSoupDynamictsList(){
        try{
            self::setWsdl('http://srvtest:8102/DynamicsAx/Services/LUA_AlmacenServicioGroup');
            //$client = new SoapClient('http://somewhere.com/?wsdl', array('cache_wsdl' => WSDL_CACHE_NONE) );
            $this->service = InstanceSoapClient::init();
            //$lista = $this->service->lista();
            echo($this->service);
            /*
            $cities = $this->service->GetCitiesByCountry(['CountryName' => 'Peru']);
            $ciudades = $this->loadXmlStringAsArray($cities->GetCitiesByCountryResult);
            dd($ciudades['Table'][1]);
            */
            
        }catch(\Exception $e) {
            return $e->getMessage();
        }
        /*
        try {
            self::setWsdl('http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl');
            $this->service = InstanceSoapClient::init();

            $countryCode = 'DK';
            $vatNumber = '47458714';

            $params = [
                'countryCode' => request()->input('countryCode') ? request()->input('countryCode') : $countryCode,
                'vatNumber'   => request()->input('vatNumber') ? request()->input('vatNumber') : $vatNumber
            ];
            $response = $this->service->checkVat($params);
            return view ('servicios-soap', compact('response'));
            
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }*/
        //return view ('servicios-soap');
    }

}
