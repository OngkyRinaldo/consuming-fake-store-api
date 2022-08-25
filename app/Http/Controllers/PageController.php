<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('get', 'https://fakestoreapi.com/products');

        $datas = json_decode($response->getBody()->getContents());

        return view('index', compact('datas'));
    }
}
