<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/Bootstrap.css')}}">

    <title>Detail Pembeli</title>
  </head>
  <body background="img/d.jpg">
    <!-- Image and text -->


    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card shadow-lg my-5">
              <div class="card-header">
                <!-- https://www.freepik.com/free-photo/high-angle-view-fresh-ingredients-raw-italian-pasta_4085702.htm#index=29 -->
                <div class="text-center">
                  <h3 class="display-4.9 font-weight-bold my-2">~ Detail Pembeli ~</h3>
                  <p class="lead">Tempat beli Laptop terpercaya!</p>
                </div>
              </div>

    		<div class="card-body px-5 py-3">
    			<div class="row mx-3">
              @foreach ($transaksi as $a)

      				 	<div class="card shadow-sm"><br>
      					 Ini Gambar
      						  <div class="card-body pb-1">
      						    <h4 class="card-title">{{$a -> nama}}</h4>
      						    <div class="form-group row px-3">
      						      <p class="card-text col-6">{{$a -> email}}</p><br>
                        <p class="card-text col-6">{{$a -> telp}}</p>
                        <p class="card-text col-6">Rp. {{$a -> total}}</p>
      						    </div>
      						  </div>

      						  <button type="submit" name="id" value="" class="card-footer btn" >Pesan</button>
      						</div>

                @endforeach
    			</div>
    		<div class="card-footer bg-dark text-light py-0">
              <p class="text-center my-3">&copy; 2019 Rifky</p>
            </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('js/bootstrap.js')}}"></script>
  </body>
</html>
