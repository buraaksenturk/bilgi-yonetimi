<!DOCTYPE html>
<html lang="tr">
<head>
<title>Ktü Randevu Sistemi</title>
<meta name="keywords" content="Bilgi Yönetim Proje">
<meta name="description" content="Hastane Randevu Sistemi">
<meta name="author" content="Burak Şentürk">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/anasayfa2.css">
<link rel="icon" href="../fotograflar/KTU_Yeni_Logo.png" type="image/x-icon"/>
<link rel="stylesheet" href="../css/button.css">
</head>

<body>
<div class="ayir"></div>
<div class="resim">
    <!-- Anasayfa Takvim Başlangıcı -->
    <div class='time-frame'>
        <div id='tarih-bolumu'></div>
        <div id='saat-bolumu'></div>
    </div>
    <!-- Anasayfa Takvim Sonu -->
    <!-- Anasayfa Butonları Başlangıcı -->
	<div class="button1">
        <a href="randevu_al.php"><button class="round green">
            Randevu Al<span class="round">Bu sayfadan randevularınızı alabilirsiniz.</span>
        </button></a>
    </div>
    <div class="button2">
        <a href="gecmis_randevular.php"><button class="round green">
            Randevu Geçmişi<span class="round">Bu sayfada randevularınızı kontrol edebilirsiniz.</span>
        </button></a>
    </div>
    <div class="button3">
        <a href="hesap_bilgilerim.php"><button class="round green">
            Hesap Bilgilerim<span class="round">Bu sayfa sizi kendinize ait bilgilere götürür.</span>
        </button></a>
    </div>
    <div class="button4">
        <a href="cikis.php"><button class="round green">
            Çıkış<span class="round">Buraya tıklayarak çıkış yapabilirsiniz.</span>
        </button></a>
    </div>
    <!-- Anasayfa Butonları Sonu -->
    <div id="baslik"><h3>KTÜ FARABİ HASTANESİ</h3></div>
</div>	
    </span>
    </div>
</div>    
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