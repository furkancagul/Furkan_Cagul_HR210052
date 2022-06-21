<?php // veri tabanı bağlantısı
    $ip = "localhost"; //host
    $user = "root";  // host id
    $password = "";  // password local olduğu için varsayılan şifre boş
    $db = "kullanici"; // db adı
    
    //bağlantı
    try{

        //////////////////////////////

        $conn = new mysqli($ip,$user,$password,"firma");

        //////////////////////////////

        $db = new PDO("mysql:host=$ip;dbname=$db",$user,$password);
        // türkçe karakter için utf8
        $db->exec("SET CHARSET UTF8");
        //eğer hata olursa pdo nun exception komutu ile ekrana yazdırıyoruz
    }catch(PDOException $e){
        die ("Hata var");
    }

       

?>
