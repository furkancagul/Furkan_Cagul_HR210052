<?php
     include("headandfooter.php");
  
    $ip = "localhost"; //host
    $user = "root";  // host id
    $password = "";  // password local olduğu için varsayılan şifre boş
   
    $conn = new mysqli($ip,$user,$password,"firma");

   if ($_POST) {

     $teklif_adi = $_POST['teklif_adi'];
     $teklif_soyadi = $_POST['teklif_soyadi'];    
     $teklif_eposta=$_POST['teklif_eposta'];
     $teklif_numarasi=$_POST['teklif_numarasi'];
     $teklif_oda=$_POST['teklif_oda'];
     $teklif_alinacak_kat=$_POST['teklif_alinacak_kat'];
     $teklif_goturulcek_kat=$_POST['teklif_goturulcek_kat'];
     $teklif_ilAlinan=$_POST['teklif_ilAlinan'];
     $teklif_ilGiden=$_POST['teklif_ilGiden'];
     $message=$_POST['message'];
     $message2=$_POST['message2'];

     $radioCompanyType = $_POST["asansor"];

    if($radioCompanyType == "Asanör İstiyorum")
        $sirketTure="Asanör İstiyorum";

    elseif ($radioCompanyType == "Asanör İstemiyorum") 
        $sirketTure="Asanör İstemiyorum";
    

    elseif ($radioCompanyType == "Bina Asanörlü") 
        $sirketTure="Bina Asanörlü";
    
    else
        $sirketTure="Farketmez";
        
     
    



    $image = $_FILES['image']['name'];
    $filepath = "images/";
    $resim = $filepath . basename($image);

       
    move_uploaded_file($_FILES["image"]["tmp_name"], $resim);
    //move_uploaded_file($_FILES["image"]["name"], $resim);
        


    $myQuery = "INSERT INTO `teklif`(`teklf_isim`, `teklif_soyisim`, `teklif_eposta`, `teklif_oda`, `teklif_alinan_kat`, `teklif_goturulcek_kat`, `teklif_aciklama`, `teklif_asansor`, `teklif_alinan_il`, `teklif_gotrulcek_il`, `teklif_adres`, `teklif_resim`) VALUES ('$teklif_adi', '$teklif_soyadi', '$teklif_eposta' ,'$teklif_oda' ,'$teklif_alinacak_kat', '$teklif_goturulcek_kat', '$message', '$sirketTure', '$teklif_ilAlinan' ,'$teklif_ilGiden', '$message2', '$resim')";

    if(mysqli_query($conn , $myQuery)){
    echo "gerçekleştirildi";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    mysqli_close($conn);

 
 }
     
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burada Naklyiat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        .register{
           background-color: #f2f2f2;
            margin-top: 3%;
            padding: 3%;
        }
        .register-left{
            text-align: center;
            color: black;
            margin-top: 10%;
        }
        .register-right{
            background-color:  #d9d9d9;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #ff3333;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
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
   


<form method="POST" class="nakliye_sirketi" action="fiyatteklif.php" enctype="multipart/form-data">  
   <div class="container register" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/logo.png" alt=""/>
                        <h3 >Merhaba...</h3>
                        <p>Değerlendir firmanı Seç Güvenle Taşın</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading" style="color:#ff1a1a">Tek Platform Tüm Firmalar Ücretsiz Fiyat Teklifi Al </h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="firma_adi" name="teklif_adi" class="form-control" placeholder="İsim" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="firma_vergi" name="teklif_soyadi" class="form-control" placeholder="Soy İsim" required=""  />
                                        </div>
                                      
                                        <div class="form-group">
                                            <select class="form-control" id="firma_il" name="teklif_oda" required="">
                                                <option value="">Oda Sayısı Seçiniz:</option>
                                                <option value="1+1">1+1</option>
                                                <option value="2+1">2+1</option>
                                                <option value="3+1">3+1</option>
                                                <option value="4+1">4+1</option>
                                                <option value="5+1">5+1</option>
                                                <option value="5+2">5+2</option>
                                                <option value="6+1">6+1</option>
                                                <option value="6+2">6+2</option>
                                                <option value="6+3">6+3</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" id="firma_il" name="teklif_alinacak_kat" required="">
                                                <option value="">Alıncak Kat Bilgileri :</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="firma_il" name="teklif_goturulcek_kat" required="">
                                                <option value="">Götürülcek Kat Bilgileri :</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Taşınılcak Ürün veya Ürünler Hakkında Ksıa Bilgi" id="message" name="message" required="" style="height: 180px"></textarea>
                                        </div>
                                        <h4>Asansör </h4>
                                        <div class="form-group">
                                            <div class="maxl">
                                           
                                                <label class="radio inline"> 
                                                    <input type="radio" id="lojistik_firma" name="asansor"  value="Asanör İstemiyorum" checked>
                                                    <span> Asanör İstemiyorum </span> 
                                                </label>
                                                 <label class="radio inline"> 
                                                    <input type="radio" id="nakliye_sirketi" name="asansor"  value="Bina Asansörü">
                                                    <span> Bina Asansörü Var</span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" id="nakliye_sirketi" name="asansor"  value="Farketmez">
                                                    <span> Farketmez</span> 
                                                </label>
                                            </div>
                                        </div>

                                       
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="email" id="firma_eposta" name="teklif_eposta" required="" class="form-control" placeholder="E-posta" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" id="firma_numarası" name="teklif_numarasi" required="" minlength="10" maxlength="10"  class="form-control" placeholder="Telefon Numrası" />
                                        </div>

                                         <div class="form-group">
                                            <select class="form-control" id="firma_il" name="teklif_ilAlinan" required="">
                                                <option value="">ALıncak İl'i Seçiniz</option>
                                                <option value="1">Adana</option>
                                                <option value="2">Adıyaman</option>
                                                <option value="3">Afyonkarahisar</option>
                                                <option value="4">Ağrı</option>
                                                <option value="5">Amasya</option>
                                                <option value="6">Ankara</option>
                                                <option value="7">Antalya</option>
                                                <option value="8">Artvin</option>
                                                <option value="9">Aydın</option>
                                                <option value="10">Balıkesir</option>
                                                <option value="11">Bilecik</option>
                                                <option value="12">Bingöl</option>
                                                <option value="13">Bitlis</option>
                                                <option value="14">Bolu</option>
                                                <option value="15">Burdur</option>
                                                <option value="16">Bursa</option>
                                                <option value="17">Çanakkale</option>
                                                <option value="18">Çankırı</option>
                                                <option value="19">Çorum</option>
                                                <option value="20">Denizli</option>
                                                <option value="21">Diyarbakır</option>
                                                <option value="22">Edirne</option>
                                                <option value="23">Elazığ</option>
                                                <option value="24">Erzincan</option>
                                                <option value="25">Erzurum</option>
                                                <option value="26">Eskişehir</option>
                                                <option value="27">Gaziantep</option>
                                                <option value="28">Giresun</option>
                                                <option value="29">Gümüşhane</option>
                                                <option value="30">Hakkâri</option>
                                                <option value="31">Hatay</option>
                                                <option value="32">Isparta</option>
                                                <option value="33">Mersin</option>
                                                <option value="34">İstanbul</option>
                                                <option value="35">İzmir</option>
                                                <option value="36">Kars</option>
                                                <option value="37">Kastamonu</option>
                                                <option value="38">Kayseri</option>
                                                <option value="39">Kırklareli</option>
                                                <option value="40">Kırşehir</option>
                                                <option value="41">Kocaeli</option>
                                                <option value="42">Konya</option>
                                                <option value="43">Kütahya</option>
                                                <option value="44">Malatya</option>
                                                <option value="45">Manisa</option>
                                                <option value="46">Kahramanmaraş</option>
                                                <option value="47">Mardin</option>
                                                <option value="48">Muğla</option>
                                                <option value="49">Muş</option>
                                                <option value="50">Nevşehir</option>
                                                <option value="51">Niğde</option>
                                                <option value="52">Ordu</option>
                                                <option value="53">Rize</option>
                                                <option value="54">Sakarya</option>
                                                <option value="55">Samsun</option>
                                                <option value="56">Siirt</option>
                                                <option value="57">Sinop</option>
                                                <option value="58">Sivas</option>
                                                <option value="59">Tekirdağ</option>
                                                <option value="60">Tokat</option>
                                                <option value="61">Trabzon</option>
                                                <option value="62">Tunceli</option>
                                                <option value="63">Şanlıurfa</option>
                                                <option value="64">Uşak</option>
                                                <option value="65">Van</option>
                                                <option value="66">Yozgat</option>
                                                <option value="67">Zonguldak</option>
                                                <option value="68">Aksaray</option>
                                                <option value="69">Bayburt</option>
                                                <option value="70">Karaman</option>
                                                <option value="71">Kırıkkale</option>
                                                <option value="72">Batman</option>
                                                <option value="73">Şırnak</option>
                                                <option value="74">Bartın</option>
                                                <option value="75">Ardahan</option>
                                                <option value="76">Iğdır</option>
                                                <option value="77">Yalova</option>
                                                <option value="78">Karabük</option>
                                                <option value="79">Kilis</option>
                                                <option value="80">Osmaniye</option>
                                                <option value="81">Düzce</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" id="firma_il" name="teklif_ilGiden" required="">
                                                <option value="">Götürülcek İl'i Seçiniz</option>
                                                <option value="1">Adana</option>
                                                <option value="2">Adıyaman</option>
                                                <option value="3">Afyonkarahisar</option>
                                                <option value="4">Ağrı</option>
                                                <option value="5">Amasya</option>
                                                <option value="6">Ankara</option>
                                                <option value="7">Antalya</option>
                                                <option value="8">Artvin</option>
                                                <option value="9">Aydın</option>
                                                <option value="10">Balıkesir</option>
                                                <option value="11">Bilecik</option>
                                                <option value="12">Bingöl</option>
                                                <option value="13">Bitlis</option>
                                                <option value="14">Bolu</option>
                                                <option value="15">Burdur</option>
                                                <option value="16">Bursa</option>
                                                <option value="17">Çanakkale</option>
                                                <option value="18">Çankırı</option>
                                                <option value="19">Çorum</option>
                                                <option value="20">Denizli</option>
                                                <option value="21">Diyarbakır</option>
                                                <option value="22">Edirne</option>
                                                <option value="23">Elazığ</option>
                                                <option value="24">Erzincan</option>
                                                <option value="25">Erzurum</option>
                                                <option value="26">Eskişehir</option>
                                                <option value="27">Gaziantep</option>
                                                <option value="28">Giresun</option>
                                                <option value="29">Gümüşhane</option>
                                                <option value="30">Hakkâri</option>
                                                <option value="31">Hatay</option>
                                                <option value="32">Isparta</option>
                                                <option value="33">Mersin</option>
                                                <option value="34">İstanbul</option>
                                                <option value="35">İzmir</option>
                                                <option value="36">Kars</option>
                                                <option value="37">Kastamonu</option>
                                                <option value="38">Kayseri</option>
                                                <option value="39">Kırklareli</option>
                                                <option value="40">Kırşehir</option>
                                                <option value="41">Kocaeli</option>
                                                <option value="42">Konya</option>
                                                <option value="43">Kütahya</option>
                                                <option value="44">Malatya</option>
                                                <option value="45">Manisa</option>
                                                <option value="46">Kahramanmaraş</option>
                                                <option value="47">Mardin</option>
                                                <option value="48">Muğla</option>
                                                <option value="49">Muş</option>
                                                <option value="50">Nevşehir</option>
                                                <option value="51">Niğde</option>
                                                <option value="52">Ordu</option>
                                                <option value="53">Rize</option>
                                                <option value="54">Sakarya</option>
                                                <option value="55">Samsun</option>
                                                <option value="56">Siirt</option>
                                                <option value="57">Sinop</option>
                                                <option value="58">Sivas</option>
                                                <option value="59">Tekirdağ</option>
                                                <option value="60">Tokat</option>
                                                <option value="61">Trabzon</option>
                                                <option value="62">Tunceli</option>
                                                <option value="63">Şanlıurfa</option>
                                                <option value="64">Uşak</option>
                                                <option value="65">Van</option>
                                                <option value="66">Yozgat</option>
                                                <option value="67">Zonguldak</option>
                                                <option value="68">Aksaray</option>
                                                <option value="69">Bayburt</option>
                                                <option value="70">Karaman</option>
                                                <option value="71">Kırıkkale</option>
                                                <option value="72">Batman</option>
                                                <option value="73">Şırnak</option>
                                                <option value="74">Bartın</option>
                                                <option value="75">Ardahan</option>
                                                <option value="76">Iğdır</option>
                                                <option value="77">Yalova</option>
                                                <option value="78">Karabük</option>
                                                <option value="79">Kilis</option>
                                                <option value="80">Osmaniye</option>
                                                <option value="81">Düzce</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <textarea class="form-control" placeholder="Açık Adres Giriniz" required="" id="message" name="message2" style="height: 180px"></textarea>
                                        </div>

                                        <div class="jumbotron">                                           
                                                <h3>Taşımak istediğiniz Ürünleri yükleyin:</h3>
                                                <input type="file" name="image" id="image" required="">                                                                                          
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Teklif AL"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
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
                    <a class="btn btn-link" href="firmagiris.php">Firma Giriş Yap</a>
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