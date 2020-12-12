<!-- Kullanıcı kaydını aldığımız kod başlangıcı-->
<?php

$db = new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charset=utf8", "root", "");


$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$tc = $_POST['tc'];
$sifre = $_POST['sifre'];
$tel = $_POST['tel'];
$cinsiyet = $_POST['cinsiyet'];

if (!$ad || !$soyad || !$tc || !$sifre || !$tel || !$cinsiyet) {
    die("Lütfen Boş Alan Bırakmayınız.");
}

$ekle = $db->prepare("INSERT INTO hastalar SET hasta_id = ?, ad = ?, soyad = ?, tc = ?, sifre = ?,  tel = ?, cinsiyet = ?");
$ekle->execute([$id,$ad, $soyad, $tc, $sifre, $tel,$cinsiyet]);

if ($ekle) {
    echo "Kayıt oldunuz";
    header("location:giris.php");
}else {
    echo "Bir hata oluştu.";
}
?>
<!-- Kullanıcı kaydını aldığımız kod sonu-->