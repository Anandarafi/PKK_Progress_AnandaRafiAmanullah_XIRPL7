<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="{{url('asstess/images/sigin1.png')}}">

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
        MENU
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

    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
          </ul>
        </div>
        @endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ url('/transaksi/store') }} " enctype="multimedia/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="box-body">
                <div class="form-group">
                        <label for="role">EVENT NAME</label>
                            <select name="id_event" id="id_event" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10">
                                @foreach ($event as $isi)
                            <option value="{{ $isi->id_event }}" >{{ $isi->nama_event }}</option>
                                @endforeach
                </div>
                <div class="form-group">
                  <label>MEMBER NAME</label>
                  <input type="text" name="nama_member" class="form-control" placeholder="MEMBER NAME" required>
                </div>
                <div class="form-group">
                  <label>ID CARD NUMBER</label>
                  <input type="text" name="no_ktp" class="form-control" placeholder="ID CARD NUMBER" required>
                </div>
                <div class="form-group">
                  <label>PHONE NUMBER</label>
                  <input type="text" name="telp" class="form-control" placeholder="PHONE NUMBER" required>
                </div>
                <div class="form-group">
                  <label>QUANTITY</label>
                  <input type="text" name="qty" class="form-control" placeholder="QUANTITY" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i>SAVE</button>
                <button type="reset" class="btn btn-danger" title="Reset Data"> <i class="glyphicon glyphicon-refresh"></i>RESET</button>
                <button href ="/welcome" class="btn btn-success" title="Back "> <i class="glyphicon glyphicon-refresh"></i>BACK</button>
              </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
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