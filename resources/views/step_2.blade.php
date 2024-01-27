<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="/Login_v3/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/Login_v3/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Login_v3/css/util.css">
	<link rel="stylesheet" type="text/css" href="/Login_v3/css/main.css">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--===============================================================================================-->

<style>
    .fixed-notification {
        position: fixed;
        bottom: 10px;
        right: 10px;
        width: 30%; /* Sesuaikan lebar notifikasi */
        z-index: 1000; /* Pastikan notifikasi muncul di atas elemen lain */
    }

    @media (max-width: 768px) {
        .fixed-notification {
            width: 80%; /* Sesuaikan lebar notifikasi untuk layar kecil */
        }
    }
</style>


</head>
<body>
	@if(session('success'))
		<div class="fixed-notification alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success:</strong> {{ session('success') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	@if(session('error'))
		<div class="fixed-notification alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Error:</strong> {{ session('error') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/Login_v3/images/bg-01.jpg');">
		
			<div class="wrap-login100">
				<!-- resources/views/login.blade.php -->

				<form class="login100-form validate-form" action="{{route('post.step2')}}" method="post">
					@csrf
					<div class="d-flex justify-content-center">
						<lottie-player src="/Login_v3/forget_password.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay></lottie-player>
					</div>

					<span class="login100-form-title p-b-10 p-t-27">
						Konfirmasi Pertanyaan
					</span>
                    <div class="text-center bg-white">
                        <span class="">penting : <i class="text-danger">Jika kembali kehalaman ini setelah submit maka jawaban dianggap salah!</i></span>
                    </div>

                    <hr class="mt-4">
                    <h5 style="font-weight:bold;" class="text-white mb-2">1 . {{$pertanyaan}} ?</h5>
					<div class="wrap-input100 validate-input" data-validate = "Masukan Jawaban Anda">
						<input class="input100" type="hidden" value="{{$username}}" name="username" placeholder="Masukan Jawaban Anda">
						<input class="input100" type="text" name="answer" placeholder="Masukan Jawaban Anda">
						<span class="focus-input100" data-placeholder="&#xf00c;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Next
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- resources/views/login.blade.php -->
	<!-- ... -->
	<!-- resources/views/login.blade.php -->



	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/bootstrap/js/popper.js"></script>
	<script src="/Login_v3/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/daterangepicker/moment.min.js"></script>
	<script src="/Login_v3/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/Login_v3/js/main.js"></script>

</body>
</html>