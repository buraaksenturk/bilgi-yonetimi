<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deneme2kayit.css">
	<title>Ktü Randevu Sistemi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php

$db = new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charset=utf8", "root", "");

$klinik_id = $_POST['klinik'];
$doktor_id = $_POST['doktor'];
$tarih = $_POST['randevu_tarihi'];
$tc = $_POST['tc'];
$saat = $_POST['saat'];

if (!$klinik_id || !$doktor_id || !$tarih || !$tc ||  !$saat) {
    die("Lütfen Boş Alan Bırakmayınız.");
}

$kayit = $db->prepare("INSERT INTO randevular SET klinik = ?, doktor = ?, tarih = ?, tc = ?, saat = ?");
$kayit->execute([$klinik_id,$doktor_id, $tarih,$tc,$saat]);

if ($kayit) {
    echo "";
    }
else {
    echo "Bir hata oluştu.";
}
header('Refresh: 2; URL=http://localhost/Grup5_EmreDemir_Burak%c5%9eent%c3%bcrk_Proje/php/anasayfa.php');

?>
<div class="spinner-border text-primary" role="status" style="position: absolute; top:50%; left: 50%;">
<span class="sr-only">Yükleniyor...</span>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</body>
</html>