<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as FactoryView;
use Illuminate\Contracts\View\View as ContractView;

class ProductsController extends Controller
{
    public function index(): ContractView|FactoryView
    {
        return view('products');
    }
}
