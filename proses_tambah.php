<?php

include 'conek.php';

	
  $nama_produk   = $_POST['nama_produk'];
  $harga_beli    = $_POST['harga_beli'];
  $gambar_produk = $_FILES['gambar_produk']['name'];



if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg');
  $x = explode('.', $gambar_produk); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_produk']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'tambahproduk/'.$nama_gambar_baru); 
                  
                  $query = "INSERT INTO produk (nama_produk, harga_beli, gambar_produk) VALUES ('$nama_produk', '$harga_beli', '$nama_gambar_baru')";
                  $result = mysqli_query($conn, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='dataproduk.php';</script>";
                  }

            } else {     
             
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
            }
} else {
   $query = "INSERT INTO produk (nama_produk, harga_beli, gambar_produk) VALUES ('$nama_produk', '$harga_beli', null)";
                  $result = mysqli_query($conn, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}
