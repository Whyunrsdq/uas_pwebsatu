<?php
  include('conek.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Produk</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
        background:#4abdac;
      }
      h1 {
        text-transform: uppercase;
        color: white;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #f7b733;
        border: solid 1px white;
        color: white;
        padding: 10px;
        text-align: left;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px white;
        color: #333;
        padding: 10px;
        color:white;
    }
    .hapus a {
          background-color: #fc4a1a;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 1.5px solid white;
          border-radius:10px;


    }
    .tambah_kembali {
  display: flex;
  justify-content: center;
  align-items: center;
}

.tambah_kembali a {
  margin: 0 10px;
  padding: 10px;
  text-decoration: none;
  background-color: #fc4a1a;
  color: #fff;
  border: 2px solid white;
  border-radius:10px;
}




    </style>
  </head>
  <body>
    <center><h1>Data Produk</h1><center>
        <div class="tambah_kembali">
    <a href="tambah_produk.php">Tambah Produk</a><br>
    <a href="index.php">Kembali</a>
        </div>

    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php

      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($conn, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
      }

      
      $no = 1;
      
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <td>Rp. <?php echo $row['harga_beli'];?></td>
          <td style="text-align: center;"><img src="tambahproduk/<?php echo $row['gambar_produk']; ?>" style="width: 70px;"></td>
          <td><div class="hapus">
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></div>
          </td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>