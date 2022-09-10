<!doctype html>
<html lang="en">
  <head>
  	<title>SIMDES-BUBUHAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="loginadmin/css/style.css">

    {{-- icon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/logoicon.ico') }}"/>


    <script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			{{-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					{{-- <h2 class="heading-section">Login #08</h2> 
				</div>
			</div> --}}
			<div class="row justify-content-center">
                
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
                    {{-- <span><img src="gambar/logo.jpg" alt="" style="margin-top: 20px"></span> --}}
		      		<span class="fa fa-user-o"></span>
		      	</div> 
		      	<h3 class="text-center mb-4">DESA BUBUHAN</h3>
				<form action="{{ route('login.post') }}" method="post" class="login-form">		
                    @if(session()->has('succes'))
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        {{ session('succes') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif      
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif	
                    @csrf
		      		<div class="form-group @error('nik') is-invalid @enderror">
		      		<input type="nik" name="nik" id="nik" class="form-control rounded-left" placeholder="nik">
                      <label for="nik">
                        @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </label>
		      		</div>
                    <div class="form-group d-flex @error('password') is-invalid @enderror">
                    <input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password">
                    <label for="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </label>
                    </div>

                    <center>
                    {{-- <div class="form-group row"> --}}
                        {{-- <div class="col-md-6 offset-md-4"> --}}
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                                {{-- @if($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback"style>
                                    <strong>{{ $errors->first('g-captcha-response') }}</strong>
                                </span>
                                @endif --}}
                            </div>
                        {{-- </div> --}}
                    {{-- </div> --}}
                </center>
                    {{-- <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                    </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>



