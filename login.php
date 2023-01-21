<?php
include 'lib/helper.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nik = $_POST ['nik'];
    $nama = $_POST ['nama'];

        $sql = "SELECT * FROM user
        WHERE nik = '$nik'
        AND nama = '$nama'";

        $data = mysqli_query($mysqli ,$sql) or die(mysqli_error($mysqli));

        if ($row = mysqli_fetch_assoc($data)) {
            $_SESSION['id_user'] = $row["id_user"];
            $_SESSION['nik'] = $row["nik"];
            $_SESSION['nama'] = $row["nama"];
            header('location:index.php');
        } else {
            $error = "NIK atau Nama salah";
        }
}
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - HOURNEY</title>
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
							<h6 class="mb-0 pb-3"><a href="login.php" style="margin-right: 30px;">Sign In </a><a href="register.php">Sign Up</a></h6>
							<div class="card-wrap mx-auto">
								<div class="card-wrapper">
									<div class="card-front">
										<div class="center-wrap1">
											<div class="section text-center">
												<center> <img src="assets/logo.png" align="center" alt="" width="50"
														height="50" class="iconlogin"> </center>
												<h2 class="text-title text-cus">HOURNEY</h2>
												<form action="login.php" method="POST">
													<div class="from-group">
														<input type="number" name="nik" class="form-control mb-4"
															placeholder="NIK" required>
													</div>
													<div class="from-group">
														<input type="text" name="nama" class="form-control mb-4"
															placeholder="Nama Lengkap" required>
													</div>
													<div class="form-inline">
														<button type="submit" class="btn btn-cus"
															name="masuk">Masuk</button>
														<p class="mb-0 mt-3 text-center"><a href="landing_page.php"
																class="text-secondary">Kembali ke Landing Page?</a></p>
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