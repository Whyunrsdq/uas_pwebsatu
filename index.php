<?php
include("conek.php");
?>



<?php

$servername = "localhost";
$database = "dbecommerce";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Maaf Koneksi Anda gagal : " . mysqli_connect_error());
} else {
    echo "";
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Store</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Playpen+Sans:wght@200;500;700&family=Poppins:wght@100;300;400;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/d076b36eac.js" crossorigin="anonymous"></script>

    

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <nav class="navbar">
        <a href="#" class="navbar-logo" id="home">Why<span>Store</span></a>

        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#product">Produk</a>
            <a href="dataproduk.php">Tambah Produk</a>
            <a href="#about">Tentang Kami</a> 
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <!-- <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
            <a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket fa-2xl" style="color: #ffffff;"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
   </nav>
   <section id="home" class="hero" >
    <main class="content">
        <h1>Selamat Datang Di <span>Why Store</span></h1>
        <p>Hadir dengan koleksi fashion terbaru yang cocok untukmu,Dapatkan sekarang dan jadilah pusat perhatian di setiap
        kesempatan, dan Sudah saatnya untuk tampil memukau dengan koleksi fashion kami.</p>
        <a href="#product" class="cta">Belanja Sekarang</a>
    </main>
   </section>
<section>
    <div class="produkterbaru">

    </div>
</section>
    <section>
        <div class="product" id="product">
            <h1 class="product-heading">Pro<span>duk</span></h1>
            <div class="box-product">

                <div class="box" id="box1">
                    <img src="img/Produk/produk1.jpg" alt="prduk1">
                    <h2>Simple Joys by Carter's Boys', Pack of 3</h2><br>
                    <h5>Rp.99.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>                  
                </div>


                
                <div class="box" id="box2">
                    <img src="img/Produk/produk2.jpg" alt="prduk2">
                    <h2>Simple Joys by Carter's Boys' Long-Sleeve Shirts, Pack of 3</h2><br>
                    <h5>Rp.149.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>
                </div>

                <div class="box"  id="box3">
                    <img src="img/Produk/produk3.jpg" alt="prduk3">
                    <h2>Simple Joys by Carter's Boys' 4-Piece Sweatshirt Set, Pack of 2</h2><br>
                    <h5>Rp.150.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>
                </div>
                <div class="box" id="box4">
                    <img src="img/Produk/produk4.jpg" alt="prduk4">
                    <h2>The Children's Place Boys' Long Sleeve Oxford Button Down Shirt</h2><br>
                    <h5>Rp.125.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>
                </div>
                <div class="box" id="box5">
                    <img src="img/Produk/produk5.jpg" alt="prduk5">
                    <h2>ELPA ELPA Boys Formal Suit Set Kids Suits Slim Fit Dresswear</h2><br>
                    <h5>Rp.400.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>
                </div>
                <div class="box" id="box6">
                    <img src="img/Produk/produk6.jpg" alt="produk6">
                    <h2>GAP Boys' Logo Hoodie Hooded Full Zip Sweatshirt</h2><br>
                    <h5>Rp.200.000</h5>
                    <a href="transaksi.php" class="btn">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-me">
            <img src="img/about.jpg" alt="about">
            <div class="about-text">
                <h2>Tentang <span>Kami</span></span></h2>
                <p>Dengan koleksi fashion model terbaru dari kami, buatlah momen bersama keluarga menjadi semakin berkesan.
                    fashion dari koleksi kami akan membuat mereka lebih percaya diri dan bahagia dalam
                    menjalani setiap aktivitasnya.
                    Dapatkan sekarang dan berikan yang terbaik untuk keluarga!</p>
                <a href="#contact" class="cta">Contact Me</a>
    
            </div>
        </div>
    </section>
    <section>
        <div class="contact" id="contact">
            <div class="contact-me">  
            <h1><span>Kontak</span> Kami</h1>
        </div>
        <div class="social">
            <div class="sosial-media">
               <a href="https://github.com/Whyunrsdq/"><i class="fa-brands fa-github"></i></a>
               <a href="https://instagram.com/whynrsdq/"><i class="fa-brands fa-instagram"></i></a>
               <a href="https://wa.me/62895360501188/"><i class="fa-brands fa-whatsapp"></i></a>
               <a href="https://www.facebook.com/Why.Exf/"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>Copyright &copy;2023 WhyStore Designed By <span>Wayy4321</span></footer>

    

    <script>
        feather.replace();
    </script>
    
    <script src="script.js"></script>

</body>
</html>