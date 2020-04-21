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

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">WELCOME TO OUR WEBSITE</div>
        <div class="intro-heading text-uppercase">IT'S NICE TO MEET YOU</div>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="event">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">EVENT</h2>
          <h3 class="section-subheading text-muted">EVENT WILL BE HELD</h3>
        </div>
      </div>
      <div class="row">
      @foreach($datas as $datas)
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="{{url('/event/detail/'.$datas->id_event)}}">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('images/'.$datas->foto)}}" alt="" width="100%">
          </a>
          <div class="portfolio-caption">
            <p class="text-muted">{{$datas->nama_event}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">ABOUT</h2>
          <h3 class="section-subheading text-muted">TIKETONLINE - YOTIKET</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="{{url('assets/img/about/2.jpg')}}" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Januari - Maret 2020</h4>
                  <h4 class="subheading">Making A Proposal <br> and <br> A Database</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">ANGGI AULIA PUTRI AND NABILA JENANDA RIDWAN</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="{{url('assets/img/about/3.jpg')}}" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Maret - April 2020</h4>
                  <h4 class="subheading">Website Making</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">ANANDA RAFI AMANULLAH</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>BE PART
                  <br>OF OUR
                  <br>WEBSITE!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">OUR AMAZING TEAM</h2>
          <h3 class="section-subheading text-muted">A-BIR TEAM</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{url('assets/img/team/7.jpg')}}" alt="">
            <h4>ANANDA RAFI AMANULLAH</h4>
            <p class="text-muted">FRONTEND WEB DEVELOPMENT</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{url('assets/img/team/8.jpeg')}}" alt="">
            <h4>ANGGI AULIA PUTRI</h4>
            <p class="text-muted">PROPOSAL MAKER</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{url('assets/img/team/9.jpeg')}}" alt="">
            <h4>Nabila Jenanda Ridwan</h4>
            <p class="text-muted">BACKEND WEB DEVELOPMENT</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">A-BIR TEAM FROM SMK TELKOM MALANG</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer" style="width:100%;position:absolute;bottom:0;">
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
