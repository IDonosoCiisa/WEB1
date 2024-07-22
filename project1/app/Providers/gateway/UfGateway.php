<?php
namespace App\Providers\gateway;
use App\Providers\gateway\models\UfModel;


Class UfGateway
{
    public function getUf() : UfModel
    {
        $url = env('UF_SERVICE_URL');
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        $uf = $json_data['serie'][0]['valor'];
        return new UfModel($uf);
    }
}
