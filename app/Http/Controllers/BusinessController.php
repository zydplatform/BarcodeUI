<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\DB;
Use App\Models\Companies;
Use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Session;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;



class BusinessController extends Controller
{

    public function BusinessProfile(){
        return view('businessprofile');
    }
//create business
    public function registerBusiness(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessProfiles',
        'Content-Type' => 'application/json',
         ['form_params'=>[
        'businessName' => 'Maganjo millers',
        'businessOwnership' => 'Individual',
        'registrationNumber' => '007574',
        'businessEmail' => 'mag@gmail.com',
        'tinNumber' => '5333373737',
        'physicalAddress' => 'mukono',
        'postalAddress' => 'mukono',
    ]

        ]);

        $responseBody = $response->send();

        echo json_encode($responseBody->successful());
    }
    //get business profiles
    public function getBusiness()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessProfiles/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //get districts
    public function getDistricts()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'districts/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//get countries
    public function getCountries()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'countries/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //get itemCatelogues
    public function itemCatelogues()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'itemCatelogues/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//business contacts
    public function businessContacts()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessContacts/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //businessLines
    public function businessLines()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessLines/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //businessLineMappings/all
    public function businessLineMappings()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessLineMappings/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //businessOwners/all

    public function businessOwners()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessOwners/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//businessTypes/all

    public function businessTypes()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessTypes/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

}

