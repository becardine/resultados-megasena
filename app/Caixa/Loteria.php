<?php


namespace App\Caixa;

class Loteria{

    //URL base da API de loterias da Caixa
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

    //Metodo resposavel por obter os resultados das loterias das caixas
    //@param string $loteria
    //@param integer $concurso
    //@return array
    public static function consultarResultado($loteria,$concurso = null){

        //endpoint completo
        $endpoint = self::URL_BASE.'/'.$loteria.'/'.$concurso;

        //inicia o curl
        $curl = curl_init();

        //configura o curl
        curl_setopt_array($curl,[
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //executa o curl
        $response = curl_exec($curl);

        //fecha o curl
        curl_close($curl);

        //retorna os dados em array
        return strlen($response) ? json_decode($response, true) : [];
    }
}

?>