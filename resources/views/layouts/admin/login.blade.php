<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambak Udang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('Logintemp/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/bootstrap/css/bootstrap.min.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/fonts/font-awesome-4.7.0/css/font-awesome.min.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/fonts/Linearicons-Free-v1.0.0/icon-font.min.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/animate/animate.cs')}}s">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/css-hamburgers/hamburgers.min.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/animsition/css/animsition.min.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/select2/select2.min.cs')}}s">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/vendor/daterangepicker/daterangepicker.cs')}}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/css/util.cs')}}s">
	<link rel="stylesheet" type="text/css" href="{{ asset('Logintemp/css/main.cs')}}s">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url({{ asset('Logintemp/images/bg-01.jpg')}});">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					TAMBAK UDANG
				</span>
				<form action="{{route('proses.login')}}" method="POST" class="login100-form validate-form p-b-33 p-t-5">
					@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" value="Login" class="login100-form-btn">
						<div class="container-login100-form-btn m-t-32">
							<a href="{{route('tamu.login')}}" style="color: red;">login sebagai tamu</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Logintemp/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('Logintemp/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Logintemp/js/main.js') }}"></script>

</body>
</html>