<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function detail(){
    $transaksi=DB::table('transaksi')->get();


      return view('detail', ['transaksi' => $transaksi]);
    }

}
