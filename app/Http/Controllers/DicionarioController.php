<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DicionarioController extends Controller
{
    //
    function carregarPaginaDicionario() {
        $curl = curl_init();
        $url = 'https://significado.herokuapp.com/palavra';
    
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result);
    
        return view('dicionario',['response'=>$result[0],'css'=>'conteudo','valor'=>'palavra']);
    }

    function pesquisarPalavra(Request $req) {
        $curl = curl_init();
        $url = 'https://significado.herokuapp.com/'.$req->input('palavra');
    
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result);
    
        return view('dicionario',['response'=>$result[0],'css'=>'conteudo']);
    }
}
