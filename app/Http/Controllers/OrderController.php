<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('Page.Order.index');
    }
    public function buatOrder() {
        return view('Page.Order.tambah_order');
    }
}
