<?php

namespace App\Http\Controllers;
Use App\Models\Companies;
Use App\Models\Product;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Picqer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class BarcodeController extends Controller
{
    //businessProductCodes

    public function businessProductCodes()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessProductCodes', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    public function BarcodeRequestView(){
        return view('barcoderequest');
    }
}
