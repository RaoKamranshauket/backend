<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(Request $req)
    {
        $dishPrice=array();
        if($req->input('chefUserName')=='umara')
     {   $client = new Client();
    $response = $client->request('POST', 'https://laazmi.pk/get_all_dishes_for_a_chef', [
        'json' => [
            'chefUserName' => $req->input('chefUserName'),
        ]
    ]);
    // handle successful response
        $data = json_decode($response->getBody());
        $dishPrice =  collect($data->DishesData)->filter(function ($dish) {
            return $dish->dishUnitPrice >= 1000;
        })
        ->values()
                ->all();

        $chickenDishes = collect($dishPrice)->filter(function ($dish) {
            return str_contains(strtolower($dish->dishName), 'chicken');
        });
        return view('dishView', compact('dishPrice'));
    }
    else
    {

    }
}

    }

