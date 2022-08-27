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

    public function electronics()
    {
        $client = new Client();

        $response = $client->request('get', 'https://fakestoreapi.com/products/category/electronics');

        $datas = json_decode($response->getBody()->getContents());

        return view('pages.electronics', compact('datas'));
    }

    public function jewelery()
    {
        $client = new Client();

        $response = $client->request('get', 'https://fakestoreapi.com/products/category/jewelery');

        $datas = json_decode($response->getBody()->getContents());

        return view('pages.jewelery', compact('datas'));
    }
    public function men()
    {
        $client = new Client();

        $response = $client->request('get', "https://fakestoreapi.com/products/category/men's clothing");

        $datas = json_decode($response->getBody()->getContents());

        return view('pages.men', compact('datas'));
    }
    public function women()
    {
        $client = new Client();

        $response = $client->request('get', "https://fakestoreapi.com/products/category/women's clothing");

        $datas = json_decode($response->getBody()->getContents());

        return view('pages.women', compact('datas'));
    }

    public function show($id)
    {
        $client = new Client();

        $response = $client->request(
            'get',
            'https://fakestoreapi.com/products/' . $id
        );

        $data = json_decode($response->getBody()->getContents());

        return view('pages.show', compact('data'));
    }
}
