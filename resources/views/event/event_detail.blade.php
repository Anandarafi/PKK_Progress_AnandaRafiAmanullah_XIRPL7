<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TIKET ONLINE - YO TIKET</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{url('assets/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">TIKET ONLINE<sup>YOTIKET</sup></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#event">EVENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">TEAM</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL EVENT</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <div class="profile-main" align="center">
   <img src="{{asset('images/'.$datas->foto)}}" class="img-circle" alt="Foto" style="height:250px;">
   <h3 class="name">{{ $datas->nama_event }}</h3>
    </div>
    <table class="table table-striped">
            <tr>
                <th>ID EVENT</th>
                <td>{{ $datas->id_event }}</td>
            </tr>
            <tr>
                <th>IMPLEMENTATION DATE</th>
                <td>{{ $datas->tgl_pelaksanaan }}</td>
            </tr>
            <tr>
                <th>INFO</th>
                <td>{{ $datas->info }}</td>
            </tr>
            <tr>
                <th>NUMBER OF TIKET</th>
                <td>{{ $datas->jumlah_tiket }}</td>
            </tr>
            <tr>
                <th>PRICE</th>
                <td>{{ $datas->harga }}</td>
            </tr>
        </table>
                    <tr>
                    <td><a href="/welcome" class="btn btn-danger">BACK</a></td>
                    <td><a href="/create_transaksi" class="btn btn-success">BUY</a></td>
                    </tr>
</section>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; TIKETONLINE - YOTIKET</span>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="{{url('assets/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{url('assets/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{url('assets/jsjqBootstrapValidation.js')}}"></script>
  <script src="{{url('assets/jscontact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{url('assets/jsagency.min.js')}}"></script>

</body>

</html>
