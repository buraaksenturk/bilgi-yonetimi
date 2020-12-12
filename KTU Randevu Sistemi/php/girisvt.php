<!-- Kullanıcı kaydının varlığını sorguladımız kod Başlangıcı-->   
<?php
session_start();

$db = new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charset=utf8", "root", "");

$tc = $_POST['tc'];
$sifre = $_POST['sifre'];

if (!$tc || !$sifre) {
    die("Boş Alan Bırakmayınız!");
}

$user = $db->query("SELECT * FROM hastalar WHERE tc = '$tc' AND sifre = '$sifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:anasayfa.php");
}else {
    echo "Bilgiler hatalı";
}
?>
<!-- Kullanıcı kaydının varlığını sorguladımız kod sonu--> 