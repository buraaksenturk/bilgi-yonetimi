<?php
    include('vtbaglan.php');
?>
<!-- Veritabanına Bağlandığı Kodlar Yukarıdaki Gibidir -->

<!DOCTYPE html>
<html lang="tr">
<head>
<title>Ktü Randevu Sistemi</title>
<meta name="keywords" content="Bilgi Yönetim Proje">
<meta name="description" content="Hastane Randevu Sistemi">
<meta name="author" content="Burak Şentürk-Emre Demir">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/kayitol.css">
<link rel="icon" href="../fotograflar/KTU_Yeni_Logo.png" type="image/x-icon"/>
</head>

<body>
<div class="giris">
    <h2> Kayıt Ol </h2>
    <!-- Kullanıcı kayıt bilgilerini aldığımız kısım başlangıcı -->
	<form action="" method="POST">
        <table>
            <div class="pc">
                <input tpye="ad" required="" name="ad">
                <span>Adınızı Giriniz</span>
            </div>
            <div class="pc">
                <input type="soyad" required="" name="soyad">
                <span> Soyadınızı Giriniz </span>
            </div>
            <div class="pc">
                <input type="tc" required="" name="tc">
                <span> T.C Kimlik Numaranızı Giriniz </span>
            </div>
            <div class="pc">
                <input type="password" required="" name="sifre">
                <span> Şifrenizi Giriniz </span>
            </div>
            <div class="pc">
                <input type="tel" required="" name="tel">
                <span> Telefon Numaranızı Giriniz </span>
            </div>
            <table>
            <!-- Cinsiyet Select'inin kodları Select.php dosyasında yer almaktadır. -->
            <?php include('select.php') ?>
            </table>
            <div class="pc">
                <input type="submit" id="button" value="Kayıt Ol">
            </div>
        </table>
    </form>
    <!-- Kullanıcı kayıt bilgilerini aldığımız kısım sonu -->
    
<!-- Kullanıcı kaydını aldığımız kod başlangıcı-->
<?php
    include("kayitvt.php");
?>
<!-- Kullanıcı kaydını aldığımız kod sonu-->
    
</div>
</body>
</html>