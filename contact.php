<?php 

include("headandfooter.php");
  
    try {
    $database= new pdo("mysql:host=localhost;dbname=iletisim;charset=utf8;", "root", "");

    } 
    catch (PDOException $e) {

    }
   
  
    if ($_POST) {

    
     $iletisim_ad=$_POST['ad'];
     $iletisim_email=$_POST['email'];
     $iletisim_konu=$_POST['konu'];
     $iletisim_mesaj=$_POST['mesaj'];

     $user=$database->prepare("INSERT into iletisim set

        iletisim_ad=:name,
        iletisim_email=:email,
        iletisim_konu=:konu,
        iletisim_mesaj=:mesaj
     ");
     $insert=$user->execute(array(
       'name'=>$iletisim_ad,
       'email'=>$iletisim_email,
       'konu'=>$iletisim_konu,
       'mesaj'=>$iletisim_mesaj
     ));

      if ($insert) {
          echo "<h4>başarıyla mesaj gönderildi. </h4>";
       }else{
          echo "sistemsel hata !!";
       }
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    
   <?php 

    headerForallPages();

    ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">İletişim</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">İletişim</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
     <form class="form-signin" method="POST" action="contact.php">
         <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">İletişim</h6>
                    <h1 class="mb-4">Herhangi Bir Soru İçin İletişime Geçin</h1>
                    <p class="mb-4">7/24 E-posta ve telefon numarası ile bize ulaşabilirsiniz.</p>
                    <div class="bg-light p-4">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="ad" placeholder="Your Name" required="">
                                        <label for="name">Adınız</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="">
                                        <label for="email">E-posta</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="konu" placeholder="Subject" required="">
                                        <label for="subject">Konu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" required="" name="mesaj" style="height: 100px"></textarea>
                                        <label for="message">Mesajınız...</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Mesajı Gönder</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24095.323995307357!2d29.110268409662584!3d40.983331125394535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8a7d44b6587%3A0x208a1d8ff0bf7e10!2zQXRhxZ9laGlyLCBLw7zDp8O8a2Jha2thbGvDtnksIDM0NzUwIER1ZHVsbHUgT3NiL0F0YcWfZWhpci_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1647342932890!5m2!1str!2str" 
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
   
    <!-- Contact End -->



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
    <!-- Footer End -->


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
        <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g"> 
    </p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="giris.js"></script>
</body>

</html>