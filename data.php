<?php
include "conek.php";

$id = $_POST['id'];

$query = mysqli_query($conn, "select * from products where id = '$id'");
$data = mysqli_fetch_array($query);
echo json_encode($data);
?>