<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as FactoryView;
use Illuminate\Contracts\View\View as ContractView;

class OrdersController extends Controller
{
    public function index(): ContractView|FactoryView
    {
        return view('orders');
    }
}
