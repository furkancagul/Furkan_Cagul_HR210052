<?php
    include("headandfooter.php");  
   
   try {
    $vt= new pdo("mysql:host=localhost;dbname=firma;charset=utf8;", "root", "");

  } catch (PDOException $e) {

    print $e->getMessage();

  }

  $sorgu=$vt->prepare("SELECT * FROM firmalar");
  $sorgu->execute();
  $firmalar=$sorgu->fetchAll(PDO::FETCH_OBJ);



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burada Naklyiat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


   
    <style type="text/css">
        #plan{
            margin-top: 35px;
        }
        .checked {
             color: orange;
        }
    </style>
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php 

    headerForallPages();

    ?>
    


      <div class="container" id="plan">
        
          <div class="row">
            <div class="col"> 
               <img src="img/team-3.jpg" class="img-thumbnail"> 
            </div>
            <div class="col-5">
              <h2 style="color: #e60000;">Üsküdar Lojistik</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Asansörlü Taşıma</p> <p>Sigortalı Taşıma</p>
            </div>
            <div class="col" id="button" style="margin-top:25px">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center" style="background:#f2f2f2;"><b style="color:  #ff0000"> 11</b> <br>Devam Eden iş</p>
                    </div>
                     <div class="col-md-6">
                       <p class="text-center"><b> 11</b> <br>tamamlanmış iş</p>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                        <p class="text-center" ><b> 11</b> <br>İptal edilen iş</p>
                    </div>
                     <div class="col-md-6">
                        <p class="text-center" style="background:#f2f2f2;"><b style="color: #ff0000;"> 11</b> <br>Yorum</p>
                    </div>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div style="text-align: center;">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                <div></div><br>
                 <p style="text-align: center;"><button type="button" class="btn btn-outline-danger btn-lg">Fiyat Teklfi Al</button></p><br><br>
            </div>        
          </div>
    </div>




  <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Adres</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>İstanbul/Ataşehir</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@buradanakliyat.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Hizmetler</h4>
                    <a class="btn btn-link" href="">Hava Taşımacılığı</a>
                    <a class="btn btn-link" href="">Deniz Taşımacılığı</a>
                    <a class="btn btn-link" href="">Karayolu Taşımacılığı</a>
                    <a class="btn btn-link" href="">Lojistik Çözümler</a>
                    <a class="btn btn-link" href="nkayit.php">Firma kayıt</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Hızlı Linkler</h4>
                    <a class="btn btn-link" href="">Hakkımızda</a>
                    <a class="btn btn-link" href="">Bize Ulaşın</a>
                    <a class="btn btn-link" href="">hizmetlerimiz</a>
                    <a class="btn btn-link" href="">Şartlar ve koşullar</a>
                    <a class="btn btn-link" href="">Destek</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Mesaj Gönder</h4>
                    <p>Göndermek isteğiniz mesaj yada şikayet dileğinizi gönderebilirsiniz.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Gönder</button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>