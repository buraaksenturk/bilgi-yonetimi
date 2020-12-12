<!-- Giriş için gerekli olan session kodları başlangıç -->
<?php
error_reporting(0);
    session_start();
    if (isset($_SESSION['user'])) {
		echo "Giriş Yapıldı.".$_SESSION['user']['ad']." ";
    }else {
        echo "";
    }
?>
<!-- Giriş için gerekli olan session kodları sonu -->

<!DOCTYPE html>
<html lang="tr">
<head>
<title>Ktü Randevu Sistemi</title>
<meta name="keywords" content="Bilgi Yönetim Proje">
<meta name="description" content="Hastane Randevu Sistemi">
<meta name="author" content="Burak Şentürk-Emre Demir">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/giris.css">
<link rel="icon" href="../fotograflar/KTU_Yeni_Logo.png" type="image/x-icon"/>
</head>

<body>
	<!-- Giriş sayfası sayfa düzeni başlangıcı -->
<div class="giris">
	<h2> GİRİŞ YAP </h2>
	<!-- Kullanıcı giriş bilgilerini aldığımız kısım başlangıcı -->
	<form action="" method="POST">
		<div class="pc">
			<input tpye="tc" required="" name="tc">
			<span>T.C Kimlik Numaranızı Giriniz</span>
		</div>
		<div class="pc">
			<input type="password" required="" name="sifre">
			<span> Şifrenizi Giriniz </span>
		</div>
		<div class="pc">
			<input type="submit" value="Giriş Yap">
		
		</div>
	</form>
	<!-- Kullanıcı giriş bilgilerini aldığımız kısım sonu -->
<!-- Kullanıcı kaydının varlığını sorguladımız kod Başlangıcı-->   
<?php
	include("girisvt.php")
?>
<!-- Kullanıcı kaydının varlığını sorguladımız kod sonu-->  
</div>
<!-- Giriş sayfası sayfa düzeni sonu-->   
</body>
</html>