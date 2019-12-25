<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="log/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/css/util.css">
	<link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
                                  $err= Session::get('errorLog');
                               ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="{{url('/verif_edit_devis')}}" method="post">
                @csrf  
					<span class="login100-form-title p-b-51">
						Code de Vérification
					</span>

					
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" id="code_verif" name="code_verif" placeholder="code">
                        <input class="input100" type="text" name="idfacture" value="{{$idfacture}}"  hidden   >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						
						</div>

						<div>
							<a href="#" class="txt1">
                            <span style="color:red">{{$err}}</span>
							</a>
						</div>
					</div>
                 
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Go
						</button>

					</div>

                    
                    <?php
                                   Session::put('errorLog', '');
                               ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/bootstrap/js/popper.js"></script>
	<script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/daterangepicker/moment.min.js"></script>
	<script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="log/js/main.js"></script>

</body>
</html>