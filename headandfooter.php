<?php
function headerForallPages(){
?>

<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
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
               <?php 
               if (isset($_SESSION['oturum'])) {
                ?>
               <a href="isler.php" id="a_isler" class="nav-item nav-link">İşler</a>
               <?php 
               }
               if (isset($_SESSION['müsteri'])) {
                ?>
               <a href="fiyatteklif.php" id="a_isler" class="nav-item nav-link">Teklifler</a>
               <?php 
               }
               ?>
                <a href="contact.php" class="nav-item nav-link">İletişim</a>

        
                
                <a href="giris.php" class="nav-item nav-link ">Giriş Yap</a>
        

                <a href="fiyatteklif.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Fiyat Teklifi Al</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+012 345 6789</h4>
        </div>
    </nav>

<?php
}
?>

