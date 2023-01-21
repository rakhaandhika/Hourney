<?php
include 'lib/helper.php';
include 'lib/library.php';

if( isset($_POST["register"]) ) {

    if(register($_POST) > 0 ){
        echo "<script>
        alert ('user baru berhasil ditambahkan'); 
        </script>";	
    } else {
        echo mysqli_error($conn );
    }
}
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register - HOURNEY</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link href="Assets/logo.png" rel="shortcut icon">
</head>

<body>
	<div class="forest">
		<div class="section">
			<div class="container">
				<div class="row full-height justify-content-center">
					<div class="col-12 text-center align-self-center py-5">
						<div class="section pb-5 pt-5 pt-sm-2 text-center">
							<h6 class="mb-0 pb-3"><a href="login.php" style="margin-right: 30px;">Sign In </a><a
									href="register.php">Sign Up</a></h6>
							<div class="card-wrap mx-auto">
								<div class="card-wrapper">
									<div class="card-front">
										<div class="center-wrap">
											<div class="section text-center">
												<h3 class=" text-cus">REGISTER AKUN</h3>
												<p class="text-center text-secondary small mb-5">SILAHKAN MENGISI DATA
												</p>
												<form class="user" method="POST">
													<div class="from-group">
														<input type="number" name="nik" class="form-control mb-4"
															placeholder="Masukan NIK" required>
													</div>
													<div class="from-group">
														<input type="text" name="nama" class="form-control mb-4"
															placeholder="Masukan nama lengkap anda " required>
													</div>
													<div class="form-inline">
														<button type="submit" name="register"
															class="btn btn-cus">Register</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="jquery/jquery.js"></script>
		<script src="bs/js/bootstrap.js"></script>
</body>