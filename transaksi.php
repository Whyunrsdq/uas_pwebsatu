<?php
include('conek.php');

if(isset($_POST['POST'])){
    $nama = $_POST['nama'];
    $nomorhp = $_POST['nomorhp'];
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $metodepembayaran = $_POST['metodepembayaran'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "insert into transaksi (nama,nomorhp,namaproduk,harga,metodepembayaran,alamat) values ('$nama','$nomorhp','$namaproduk','$harga','$metodepembayaran','$alamat')");
    if($query){
        echo'<script>alert("Pemesanan Berhasil");
			location.href="index.php"</script>';
    } else{
        echo"<script>alert('Pemesanan Gagal')</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Checkout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #4abdac;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
h2{
 	text-align:center;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
  	display:flex;
  	justify-content: space-between;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #4abdac;
	border: none;
	min-width: 140px;
}
.signup-form .btn a {        
	font-size: 16px;
	font-weight: bold;
	background: #4abdac;
	border: none;
	min-width: 140px;
	color:white;
	text-decoration: none;

}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #4abdac !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}
a:hover{
	text-decoration:none;
}
</style>
</head>
<body>



<div class="signup-form">
    <form method="POST">
		<h2>Silahkan Isi Formulir</h2>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="nama" placeholder="Nama..." required="required"></div>
				<div class="col"><input type="text" class="form-control" name="nomorhp" placeholder="Nomor HP..." required="required"></div>
			</div>        	
        </div>
         <div class="form-group">
			
			<select class="form-control" id="namaproduk" name="namaproduk" require onchange="detail()">
				<option value="">---Pilih Prouk---</option>

				<?php
				include "conek.php";

				$query = mysqli_query($conn,"select * from products");
				while ($data = mysqli_fetch_array($query)){
				?>
					<option value="<?php echo $data['id']; ?>"><?php echo $data['namaproduk']; ?></option>
					<?php
				}
					?>
				<!-- <option value="1">Simple Joys by Carter's Boys', Pack of 3</option>
				<option value="2">Simple Joys by Carter's Boys' Long-Sleeve Shirts, Pack of 3</option>
				<option value="3">Simple Joys by Carter's Boys' 4-Piece Sweatshirt Set, Pack of 2</option>
				<option value="4">The Children's Place Boys' Long Sleeve Oxford Button Down Shirt</option>
				<option value="5">ELPA ELPA Boys Formal Suit Set Kids Suits Slim Fit Dresswear</option>
				<option value="6">GAP Boys' Logo Hoodie Hooded Full Zip Sweatshirt</option> -->
			</select>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga..." readonly>
        </div>
		<div class="form-group">
            <select name="metodepembayaran" id="metodepembayaran" class="form-control" placeholder="Metode" required="required">
  <option value="">---Metode Pembayaran---</option>
  <option value="transferbank">Transfer Bank</option>
  <option value="virtualaccount">Virtual Account</option>
  <option value="ewallet">E-Wallet</option>
  <option value="cod">COD</option>
</select>
        </div>
      <div class="form-group">
        	<textarea id="alamat" name="alamat" rows="4" cols="50" placeholder="Alamat..." class="form-control"></textarea>
        </div>
      <hr>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg" name="POST">Pesan</button>
          <button type="submit" class="btn btn-primary btn-lg"><a href="index.php" style="text-decoration:none;">Kembali</a></button>
          
        </div>
    </form>
</div>

<script>

function detail(){
	var id = $("#namaproduk").val();
	$.ajax({
		url : "data.php",
		method : "POST",
		data : {id:id},
		dataType : "json",
		success:function(data){
			$('#harga').val(data.harga);
		}
	})
}

</script>
</body>
</html>