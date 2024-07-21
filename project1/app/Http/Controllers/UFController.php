<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UFController extends Controller
{
    public function getUf()
    {
        $url = "https://mindicador.cl/api/uf";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        $uf = $json_data['serie'][0]['valor'];
        return view('ufView', compact('uf'));
    }
}
