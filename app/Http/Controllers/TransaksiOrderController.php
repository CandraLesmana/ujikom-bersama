<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiOrderController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('transaksi-order.index');
    }

    public function casier(){
        return view('transaksi-order.casier');
    }
}
