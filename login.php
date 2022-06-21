
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

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
    <link rel="stylesheet" type="text/css" href="css/giris.css">
  

</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Burada Nakliyat</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                 <a href="index.php" class="nav-item nav-link">Anasayfa</a>
                <a href="about.php" class="nav-item nav-link">Hakkında</a>
               <a href="firmalar.php" class="nav-item nav-link">Firmalar</a>
                <a href="contact.php" class="nav-item nav-link">İletişim</a>
                <a href="isler.php" id="a_isler" class="nav-item nav-link">Teklifler</a>
                <a href="fiyatteklif.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Fiyat Teklifi Al</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+012 345 6789</h4>
        </div>
    </nav>
    <!-- Navbar End -->

    <?php

  include ("baglanti.php");

  
  if($_POST)
  {

    $name =$_POST["name"];
    $pass =$_POST["pass"];


    $query  = $db->query("SELECT * FROM user WHERE email='$name' && password='$pass'",PDO::FETCH_ASSOC);
    if ( $say = $query -> rowCount() ){

      if( $say > 0 ){
        $_SESSION['müsteri']=true;
        $_SESSION['name']=$name;
        $_SESSION['pass']=$pass;
        
      }
      else{
        echo "oturum açılmadı hata";
      }
    }else{
      echo "<h1>Kullanıcı adı veya şifre hatalı</h1>";
    }
  }else{
    echo " <h1> lütfen giriş yapın</h1>";
    
    echo 'üye değilseniz üye olmak için <a href="index.php">Tıklayın</a>';
  }

  
?>

    
</body>
</html>