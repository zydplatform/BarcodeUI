<?php
namespace App\Http\Controllers;
Use App\Models\Product;
Use App\Models\Companies;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Validator,Redirect,Response;
use Session;
use DB;
use GuzzleHttp\ClientInterface;

class ProductController extends Controller
{

public function productCatalogue(){
    return view('createproducts');
}
public function productadminCatalogue(){
    return view('productsadmin');
}
//businessProducts/all

    public function businessProducts()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessProducts/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    

}
