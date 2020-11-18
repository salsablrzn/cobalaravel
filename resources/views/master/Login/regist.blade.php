<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/Login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="asset/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="RegistStore" method="post">
						<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					<span class="login100-form-title">
						Register User
					</span>

					<div class="wrap-input100 validate-input" data-validate = "First Name is required">
						<input class="input100" id="exampleInputFirstName"type="text" placeholder="First Name" name="firstname" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Last Name is required">
						<input class="input100" id="exampleInputLastName"type="text" placeholder="Last Name" name="lastname" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" id="exampleInputEmail" type="text" placeholder="Email ex@abc.xyz" name="email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone is required">
						<input class="input100" id="exampleInputPhone"type="text" placeholder="Phone" name="phone" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" placeholder="Enter Password" name="password" id="pass">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="password" placeholder="Confirm Password" name="password" id="copass" onkeyup="cekPass()">
                    <p id="error" style="color:red"></p>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" placeholder="Aktif" name="jobstatus" value="1"  disabled value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-toggle-on" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<select class="input100" id="exampleInputJabatan" type="text" placeholder="Jabatan" name="jabatan" required>
    <option disabled selected style="padding: 10px">Pilih Jabatan  </option>
    <option value='0'>Admin</option>
    <option value='1'>Kasir</option>
    </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-toggle-on" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Regist
						</button>
					</div>					

					<div class="text-center p-t-12">
						<!-- <span class="txt1">
							Login
						</span>
						<a class="txt2" href="login">
							User
						</a> -->
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="login">
							Have a Account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</form>

	<script>
  function cekPass()
  {
    var pass = document.getElementById('pass').value;
    var copass = document.getElementById('copass').value;
    var text = document.getElementById('error');
    if(pass != copass)
    {
      text.style.color = 'red';
      text.innerHTML='Password Salah';
    }
    else
    {
      text.style.color = 'green';
      text.innerHTML='Password Benar';
    }
  }
</script>
	
	
	

	
<!--===============================================================================================-->	
	<script src="asset/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/Login_v1/endor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="asset/Login_v1/js/main.js"></script>

</body>
</html>