<?php error_reporting(0);
 $baglan = @new mysqli('localhost', 'root', '', 'bilgiyonetimi');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);
 }
?>
<!-- Veritabanına Bağlandığı Kodlar Yukarıdaki Gibidir -->