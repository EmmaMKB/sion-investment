<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View as ContractsView;

class ProductController extends Controller
{
    //

    function index(): ContractsView
    {

        $json = file_get_contents(storage_path('json/products.json'));
        $data = json_decode($json, true);
        $products = $data['products'];

        return view(
            'products.index',
            [
                'products' => $products
            ]
        );
    }

    function get($slug): ContractsView
    {
        $json = file_get_contents(storage_path('json/products.json'));
        $data = json_decode($json, true);
        $products = $data['products'];
        $product = null;
        foreach ($products as $p) {
            if ($p['slug'] === $slug) {
                $product = $p;
                break;
            }
        }
        return view('products.show', ['product' => $product]);
    }
}
