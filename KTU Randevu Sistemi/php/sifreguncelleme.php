<!-- Kullanıcı sifresini güncellediğimiz kod başlangıcı-->
<?php
error_reporting(0);
session_start();

$db = new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charset=utf8", "root", "");

if($_POST){
    $eskisifre = $_POST['eskisifre'];
    $yenisifre = $_POST['yenisifre'];
    if (!$eskisifre || !$yenisifre) {
        die("Lütfen Boş Alan Bırakmayınız.");
    }
    $sorgu=$db->prepare("UPDATE hastalar SET sifre=:yenisifre WHERE sifre=:eskisifre ");
    $sorgu -> execute(array(":yenisifre" => $yenisifre , ":eskisifre" => $eskisifre ));
}
if ($sorgu) {
    echo "Şifreniz Değiştirildi";
}else{
    echo "Bir hata oluştu.";
}

?>
<!-- Kullanıcı sifresini güncellediğimiz kod sonu-->