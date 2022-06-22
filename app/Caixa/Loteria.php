<?php


namespace App\Caixa;

class Loteria{

    //URL base da API de loterias da Caixa
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

    //Metodo resposavel por obter os resultados das loterias das caixas
    //@param string $loteria
    //@return array
    public static function consultarResultado($loteria){

        //endpoint completo
        $endpoint = self::URL_BASE.'/'.$loteria;

        //inicia o curl
        $curl = curl_init();

        //configura o curl
        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRASFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //executa o curl
        $response = curl_exec($curl);

        //fecha o curl
        curl_close($curl);

        echo "<pre>";
        print_r($response);
        echo "</pre>";
    }
}

?>