<?php
session_start();
include 'conek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Masuk</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #4abdac;
}
.form-control {
	min-height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: transparent;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 2px;
}
.login-form {
	width: 350px;
	margin: 30px auto;
	text-align: center;
}
.login-form h2 {
	margin: 10px 0 25px;
	color: #fc4a1a;
}
.login-form form {
	color: #7a7a7a;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #4abdac;
	border: none;
	outline: none !important;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #fc4a1a;
}
.login-form a {
	color: #fff;
	text-decoration: underline;
}
.login-form a:hover {
	text-decoration: none;
}
.login-form form a {
	color: #7a7a7a;
	text-decoration: none;
}
.login-form form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>

<?php
if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn, "SELECT * FROM register where username = '$username' and password = '$password'");
		if(mysqli_num_rows($query) >0){
			$data = mysqli_fetch_array($query);
			$SESSION['register'] = $data;
			echo '<script> alert("Selamat Datang  '.$data['username'].'");
				location.href="index.php"</script>';
		} else {
			echo '<script>alert("Username/Password Tidak Sesuai");</script>';
		}
	}
?>

<div class="login-form">
    <form method="post">
        <h2 class="text-center">Masuk</h2>   
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <a href="index.php"><button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button></a>
        </div>
    </form>
    <p class="text-center small">Belum Punya Akun? <a href="register.php">Daftar Disini</a></p>
</div>
</body>
</html>