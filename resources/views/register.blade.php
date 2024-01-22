<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/Login_v3/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
			
					<span class="login100-form-title p-b-50 p-t-27">
						Register Akun Baru
					</span>
					<h6 class="text-white">
						<b>Informasi Akun</b>
						<hr style="border-color: #fff;">
					</h6>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Nama Lengkap">
						<input class="input100" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
						<span class="focus-input100" data-placeholder="&#xf2bc;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Password">
						<input class="input100" type="text" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Ulang Password">
						<input class="input100" type="text" name="password" placeholder="Ulangi Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<h6 class="text-white  p-t-27">
						<b>Pemulihan Akun</b>
						<hr style="border-color: #fff;">
					</h6>

				
					<div class="wrap-input100 validate-input" data-validate="Pertanyaan Pemulihan Password">
						<select class="form-control" type="text" name="pemulihan_password" placeholder="Password">
							<option value="Tanggal Berapa Kamu Lahir">Tanggal Berapa Kamu Lahir ? </option>
							<option value="Dimanakah Kamu Lahir">Dimanakah Kamu Lahir</option>
							<option value="Apa Zodiak Mu">Apa Zodiakmu ?</option>
							<option value="Hal Yang Kamus Sukai">Hal Yang Kamus Sukai ?</option>
						</select>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Jawaban">
						<input class="input100" type="text" name="jawaban" placeholder="Jawaban">
						<span class="focus-input100" data-placeholder="&#xf00c;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>

					<div class="text-center p-t-60">
						<a class="txt1" href="/login">
							Sudah Punya Akun ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

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