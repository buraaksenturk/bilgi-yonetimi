<?php
	include('vtbaglan.php');
?>
<!-- Cinsiyet Select'inin Veritabanına Bağlandığı Kodlar Yukarıdaki Gibidir. --> 
<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/select.css">
</head>

<body>
<!-- Cinsiyetin Select'i Html Kodları Başlangıcı -->
<div class="custom-select" style="width:240px;">
  <select name="cinsiyet" class="cinsiyet">
    <!-- Cinsiyet Select'inin Veritabanından Çekildiği Kodlar Başlangıcı -->
		<?php
			$cinsiyetsorgu = mysqli_query($baglan,"select * from cinsiyet");
			while ($cinsiyetcek = mysqli_fetch_assoc($cinsiyetsorgu)){;
		?>
		<option class="cinsiyet"><?php echo $cinsiyetcek['cinsiyet']; ?></option><?php } ?>
      <!-- Cinsiyet Select'inin Veritabanından Çekildiği Kodlar Sonu -->
  </select>
</div>
<!-- Cinsiyetin Select'i Html Kodları Sonu -->

<!-- Cinsiyet Select'inin JavaScript Düzenlemeleri Aşağıda Çekilmiştir. -->
<script src="../js/select.js"></script>
<!-- Cinsiyet Select'inin JavaScript Düzenlemeleri JS klasörü içindeki Select.js Dosyasındadır. -->
</body>
</html>