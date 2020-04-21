<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="LOGIN">
  <meta name="author" content="ANANDARAFI">
    <title>LOGIN - YOTIKET</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('asstess/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('asstess/css/style.css')}}">
</head>
<body>

    <div class="main">
			@if(Session::get('alert_message'))
                <div class="alert alert-danger">
                <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
						<h2 class="form-title">LOGIN</h2>
						
						<form class="login100-form validate-form" action="{{url('login/cek')}}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
						<label for="text"><i class="zmdi zmdi-email"></i></label>
                                <input id="username" type="text" class="input100" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="USERNAME" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</span>
					</div>
					<div class="form-group">
					<label for="password"><i class="zmdi zmdi-lock"></i></label>
								</span>
                                <input id="password" type="password" class="input100" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="PASSWORD" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
							<div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="LOGIN"/>
                            </div>
						</form>				
                    </div>
					<div class="signup-image">
                        <figure><img src="{{url('asstess/images/signin-image.jpg')}}" alt="sing in image"></figure>
                        <a href="/register" class="signup-image-link">CREATE AN ACCOUNT</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->

    </div>

    <!-- JS -->
    <script href="{{url('asstess/vendor/jquery/jquery.min.js')}}"></script>
    <script href="{{url('asstess/js/main.js')}}"></script>
</body>
</html>