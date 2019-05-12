<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function admin(){
        //Mengambil Data Dati table Barang
        $barang = DB::table('barang')->get();

        return view('admin', ['barang' => $barang]);
  }

  public function proses(Request $request){
    DB::table('barang')->insert([
      'nama' =>$request->nama,
      'gambar' =>$request->gambar,
      'harga' =>$request->harga


    ]);

    return redirect('/admin');
  }
  public function edit($id){
    $barang = DB::table('barang')->where('id_barang', $id)->get();
    return view('edit', ['barang' => $barang]);
  }

  public function update(Request $request){
    DB::table('barang')->where('id_barang',$request->id)->update([
      'nama' => $request->nama,
      'gambar' => $request->gambar,
      'harga' => $request->harga
    ]);
    return redirect('/admin');
  }
  public function hapus($id){
      DB::table('barang')->where('id_barang',$id)->delete();
      return redirect('/admin');

}

}

 ?>
