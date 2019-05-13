<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Laptop Cell</title>
  </head>
  <body background="img/d.jpg">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card shadow-lg my-5">
              <div class="card-header">
                <!-- https://www.freepik.com/free-photo/high-angle-view-fresh-ingredients-raw-italian-pasta_4085702.htm#index=29 -->
                <div class="text-center">
                  <h3 class="display-4.9 font-weight-bold my-2">~ Laptop Cell ~</h3>
                  <p class="lead">Tempat beli Laptop terpercaya!</p>
                </div>
              </div>

          <?php
          $id_order = DB::table('transaksi')->select('id_order', +1)->count();

           ?>

    		<div class="card-body px-0 py-3">
    			<div class="row mx-3">
              @foreach ($barang as $a)
      					<form action="/order" method="post" class="col-lg-4 col-md-6 mb-4">
                  @csrf
      					  	<div class="card shadow-sm"><br>
                  <input type="hidden" name="id_order" value="{{$id_order}}">
      						  <img class="card-img-top" name="gambar" src="{{$a->gambar}}"  style="height:220px;">
      						  <div class="card-body pb-1">
      						    <h4 class="card-title">{{$a -> nama}}</h4>
      						    <div class="form-group row px-3">
      						      <p class="card-text col-6">Rp. {{$a -> harga}}</p>
      						    </div>
      						  </div>

      						  <button type="submit" name="id" value="{{$a->id_barang}}" class="card-footer btn" >Pesan</button>
      						</div>
      					</form>
                @endforeach
    			</div>
    			<div class="row justify-content-center my-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              CheckOut
            </button>
    			</div>
    		</div>
    		<div class="card-footer bg-dark text-light py-0">
              <p class="text-center my-3">&copy; 2019 Rifky</p>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Diri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/checkout" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="nama">Atas nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                      </div>
                      <div class="form-group">
                        <label for="telp">No.Telepon</label>
                        <input type="text" name="telp" class="form-control" id="telp" placeholder="+62" required>
                      </div>
                      <input type="hidden" name="id_order" value="{{$id_order}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">CheckOut</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{asset ('js/Bootstrap.js')}}"></script>
  </body>
</html>
