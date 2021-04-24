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
    public function ClientBusinessProfile(){
        return view('clientbusiness');
    }

    public function Company(){
        return view('addcompanies');
    }
    public function FinishBusiness(){
        return view('finishbusiness');
    }
//create business
    public function registerBusiness(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessProfiles',
        ['json'=>[
        'businessName' => 'Mukwano Limited',
        'businessOwnership' => 'Individual',
        'businessOwner' => 'Mukwano properties',
        'registrationNumber' => '007574',
        'businessEmail' => 'Mukwano@gmail.com',
        'tinNumber' => '5333373737',
        'physicalAdress' => 'mukono',
        'postalAdress' => 'mukono',
        // 'district' => ['districtCode'=>'123','districtName'=>'mukono'],
        // 'country' => ['countryCode'=>'256','countryName'=>'Uganda'], 
        ]
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create country
    public function addCountry(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'countries',
        ['json'=>[
        'countryCode'=>'097',
        'countryName'=>'Tanzania',
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create country
    public function addDistrict(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'districts',
        ['json'=>[
        'districtCode'=>'1001',
        'districtName'=>'Mubende',
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
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

    //businessMappingsTypes/all

    public function businessMappingsTypes()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessTypeMappings/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //create business lines
    public function addbusinessLines(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessLines',
        ['json'=>[
        'code'=>'20078728',
        'businessLineName'=>'Agro-processing',
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create business owners
    public function addbusinessOwners(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessOwners',
        ['json'=>[
        'businessProfile'=>['id'=>'2c91808978b128970178b14bd4580003'],
        'firstName'=>'Kiganda',
        'lastname'=>'Ivan',
        'telephone'=> '0752624469',
        'email'=>'kigz@gmail.com'
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create business typemappings
    public function addbusinessTypemappings(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessTypeMappings',
        ['json'=>[
        'businessProfile'=>['id'=>'2c91808978d51fcb0178ef7468990009'],
        'businessType'=>['id'=>'2c91808978b19da10178b1b529e80005'],
        
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create business types
    public function addbusinessTypes(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessTypes',
        ['json'=>[
        'code'=>'57868768768871',
        'type'=>'Industrial',
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }
}

