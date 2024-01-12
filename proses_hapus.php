<?php
include ('conek.php');
$id = $_GET['id'];
$query = "DELETE FROM produk where id = '$id'";
$result = mysqli_query($conn, $query);

 if(!$result){
            die ("Query Error : ".mysqli_error($conn)."-".mysqli_error($conn));
        }else {
            echo "<script> alert('Data berhasil dihapus!');window.location='dataproduk.php';</script>";
        }
?>