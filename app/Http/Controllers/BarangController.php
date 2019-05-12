<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class BarangController extends Controller
{
    public function index()
    {

      //mengambil data dari table barang
      $barang = DB::table('barang')->get();
      DB::table('transaksi')->get();


      //mengirim data data barang ke index
      return view('index', ['barang' => $barang]);

    }

    public function order(Request $request)

    {

      $keranjang = DB::table('keranjang')->get();
      $transaksi = DB::table('transaksi')->get();
        DB::table('keranjang')->insert([
        'id_barang'=>$request->id,
        'id_order'=>$request->id_order
      ]);
      if ($transaksi) {

        echo "<script>alert('Pesanan Sudah Diproses, Pilih Checkout Bila Ingin Membeli')</script>";
        echo "<script>location='/'</script>";
      }

    }

    public function checkout(Request $request){
      $id_o= $request->id_order;
      $total = DB::table('barang')->join('keranjang', 'barang.id_barang', '=', 'keranjang.id_barang')->where('id_order',$id_o)->sum('harga');
      $input = DB::table('transaksi')->insert([
      'nama'=>$request->nama,
      'email'=>$request->email,
      'telp'=>$request->telp,
      'total'=>$total,
      'id_order'=>$request->id_order
      ]);
      if ($input) {

        echo "<script>alert('CheckOut Telah Berhasil, Tunggu Konfirmasi Oleh Admin Melalui Email')</script>";
        echo "<script>location='/'</script>";
      }

    }

}
