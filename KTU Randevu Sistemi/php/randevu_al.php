<?php error_reporting(0);
 $baglan = @new mysqli('localhost', 'root', '', 'bilgiyonetimi');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);
 }
?>
<!-- Veritabanına Bağlandığı Kodlar Yukarıdaki Gibidir -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/randevu_al.css">
	<title>Ktü Randevu Sistemi</title>
</head>
<body>
<?php

$db = new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charset=utf8", "root", "");

// klinik al
$klinik_id = isset($_POST['klinik']) ? $_POST['klinik'] : 0;
$doktor_id  = isset($_POST['doktor']) ? $_POST['doktor'] : 0;

// klinikleri çek
$sorgu_klinik = "SELECT klinik_id, klinik_adi FROM klinik";
$query_klinik = $db->query($sorgu_klinik, PDO::FETCH_ASSOC);

// doktorları çek
$sorgu_doktor = "SELECT doktor_id, unvan_ad_soyad FROM doktor where klinik_id=$klinik_id";
$query_doktor = $db->query($sorgu_doktor, PDO::FETCH_ASSOC);


?>
<div class="baslangic">
<!-- Anasayfa Takvim Başlangıcı -->
<div class='time-frame'>
    <div id='tarih-bolumu'></div>
    <div id='saat-bolumu'></div>
</div>
<!-- Anasayfa Takvim Sonu -->
<div class="resim">
<form action="" name="randevu" id="randevu" enctype="multipart/form-data" method="POST">
    <label for='klinik'>Klinik Seçiniz:</label><br>
<div class="custom-select" style="width:240px;">
    <!-- Klinik Select'inin Veritabanından Çekildiği Kodlar Başlangıcı -->
    <select id="klinik" name="klinik" onchange="this.form.submit()" class="klinik" style="width:250px;"> <!--marka-->
        <?php
        echo "<option value='0'>Klinik</option>";
        foreach( $query_klinik as $row ){
            $selected =  $row['klinik_id'] == $klinik_id ? 'selected' : '';
            echo "<option value=" . $row['klinik_id'] . " " . $selected . ">" . $row['klinik_adi'] . "</option>";
        }
        ?>
        </select>
    <!-- Klinik Select'inin Veritabanından Çekildiği Kodlar Sonu -->
</div><br>
<label for='doktor'>Hekim Seçiniz:</label><br>
<div class="custom-select" style="width:240px;">
        <!-- Doktorlar Select'inin Veritabanından Çekildiği Kodlar Başlangıcı -->
        <select id="doktor" name="doktor" class="doktor" style="width:250px;"> <!--seri-->
        <?php
        echo "<option value='0'>Doktor</option>";
        foreach( $query_doktor as $row ){
           echo "<option value=" . $row['doktor_id'] . ">" . $row['unvan_ad_soyad'] . "</option>";
        }
        ?>
         </select>
        <!-- Doktorlar Select'inin Veritabanından Çekildiği Kodlar Sonu -->
</div><br>
<!-- Tarihin Alınacağı Kod Başlangıcı -->
<label for="tarih">Tarih Seçiniz:</label><br>
    <input type="date" id="randevu_tarihi" name="randevu_tarihi"/><br>
<!-- Tarihin Alınacağı Kod Sonu -->
<!--tc inputu -->
<label for="tc">T.C. Kimlik Numaranızı Giriniz:</label>
<input type="text" name="tc" id="tc" placeholder="T.C. kimlik numaranız">
<!--tc inputu -->
<label for="saat">Randevu Saatini Seçiniz:</label><br>
<div class="custom-select" style="width:240px;">
    <select name="saat" class="saat" id="saat">
    <!-- Saat Select'inin Veritabanından Çekildiği Kodlar Başlangıcı -->
        <?php
            $saatsorgu = mysqli_query($baglan,"select * from saat");
            while ($saatcek = mysqli_fetch_assoc($saatsorgu)){;
        ?>
        <option class="saat"><?php echo $saatcek['saat']; ?></option><?php } ?>
    <!-- Saat Select'inin Veritabanından Çekildiği Kodlar Sonu -->
    </select>
</div>
<button type="button" onclick="postwith();"class="button">Randevu Al</button>
</div>
</form>
</div>

<script>
    function postwith () {
        
        document.getElementById("randevu").action ='randevukayit.php';
        document.getElementById("randevu").submit();
        
    }
</script>
<!-- Takvim JS Kodları Başlangıcı -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script type="text/javascript">
	$(window).load(function(){
		$(document).ready(function() {
			var interval = setInterval(function() {
				var momentNow = moment();
				$('#tarih-bolumu').html(momentNow.format('DD.MM.YYYY'));
				$('#saat-bolumu').html(momentNow.format('hh:mm:ss'));
			}, 100);
		});
	});
</script>
<!-- Takvim JS Kodları Sonu -->

</body>
</html>