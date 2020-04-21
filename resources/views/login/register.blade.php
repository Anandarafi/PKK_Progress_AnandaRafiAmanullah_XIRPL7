<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="LOGIN">
  <meta name="author" content="ANANDARAFI">
    <title>SIGNUP - YOTIKET</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('asstess/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('asstess/css/style.css')}}">
</head>

<body>
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">SIGN UP</h2>
                        <form method="POST" action="{{ url('/login/store') }} " enctype="multimedia/form-data">
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="FULL NAME"/>
                            </div>
                            <div class="form-group">
                                <label for="text"><i class="zmdi zmdi-email"></i></label>
                                <input type="username" name="username" id="username" placeholder="USERNAME"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="PASSWORD"/>
                            </div>
                            <div class="form-group">
                            <label for="role"><i class="zmdi zmdi-accounts-list-alt"></i></label>
                            <select name="role" id="role" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10">
                                @foreach ($role as $data)
                            <option value="{{ $data->role }}" >{{ $data->nama_role }}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="signup" class="form-submit" value="REGISTER"/>
                            </div>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('asstess/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I AM ALREADY MEMBER</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script href="{{url('asstess/vendor/jquery/jquery.min.js')}}"></script>
    <script href="{{url('asstess/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
