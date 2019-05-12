<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DashBoard Admin</title>
      <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">

  </head>
  <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-striped">



                          <thead>

                            <tr>
                              <th>Nama</th>
                              <th>Gambar</th>
                              <th>Harga</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($barang as $a)
                          <tr>
                            <td>{{$a->nama}}</td>
                            <td><img src="{{$a->gambar}}"  style="height:100px;" alt=""></td>
                            <td>{{$a->harga}}</td>
                            <td>
                            <a href="/admin/edit/{{$a->id_barang}}" class="btn btn-success">Edit</a>
                            <a href="/admin/hapus/{{$a->id_barang}}" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          </tbody>
                          @endforeach

                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Barang</button>
                        <a href="/detail" class="btn btn-success">Detaile Pembelian</a>
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="/publi/admin/proses" method="post" enctype="multipart/form-data">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama</label>
                                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="gambar">Gambar</label>
                                    <select class="" name="gambar">
                                      <option  disabled selected>Pilih Gambar</option>
                                      <option value="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/laptops/ASUS_X455LA/ASUS_X455LA_L_1.jpg">Leptop Asus</option>
                                      <option value="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/laptops/Axioo_Neon_RNW_123/Axioo_Neon_RNW_123_L_1.jpg">Leptop Axioo</option>
                                    </select>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Harga</label>
                                      <input type="harga" name="harga" class="form-control" id="exampleInputEmail1"  required>
                                    </div>
                                </div>
                              <div class="form-group">
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input type="submit" name="submit" value="Input Barang" class="btn btn-success">
                              </div>

                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </nav>



      @endsection

      <script src="{{asset('js/Bootstrap.js')}}"></script>

  </body>
</html>
