<?php

namespace App\Http\Controllers\payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPESAController extends Controller
{
    //Get Access Token
    public function getAccessToken(){
        $consumerkey="53eAz9ca7yJ4TvoTp5a4pVQ8KAaAqhMD";
        $consumerkeysecret= "a0x1W1HmFkfRYIGF";
    

        $url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl=curl_init($url); //Initialize URL
   
      
        curl_setopt_array($curl,array(
                CURLOPT_HTTPHEADER=>['Content-Type:application/json:charset=utf8'],
                CURLOPT_RETURNTRANSFER =>TRUE,
                CURLOPT_HEADER=>FALSE,
                CURLOPT_USERPWD => $consumerkey. ':' .$consumerkeysecret,
                ));
            
        $response=(curl_exec($curl)); //Decode the Mpesa response
       
        curl_close($curl);
        return $response->access_token;

    }
    //Register UrL
    public function registerURLS(){
        $body=array(
            'ShortCode'=>'',
            'ResponseType'=>"Completed",
            'ConfirmationURL'=>'https://mydomain.com/confirmation',
            'ValidationURL'=>'https://mydomain.com/validation',

        );
    }
    //
    public function makeHttp($url,$body){
        $curl=curl_init();
        curl_setopt_array($curl,array(
            CURLOPT_URL=>$url,
            CURLOPT_HEADER=>array('Content-Type:application/json','Authorization:Bearer'.$this->getAccessToken()),
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_POST=>true,
            CURLOPT_POSTFIELDS=>json_encode($body)



        ));
        $curl_response=curl_exec($curl);
        curl_close($curl);
        return $curl_response;
     

    }

    

}
