<?php 
    include('randevugecmisivt.php');
    $sorgu=$vt -> prepare('SELECT * FROM hastalar');
    $sorgu->execute();
    $hastalist=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<title>Ktü Randevu Sistemi</title>
<meta name="keywords" content="Bilgi Yönetim Proje">
<meta name="description" content="Hastane Randevu Sistemi">
<meta name="author" content="Burak Şentürk-Emre Demir">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/hesap_bilgilerim.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link rel="icon" href="../fotograflar/KTU_Yeni_Logo.png" type="image/x-icon"/>
</head>

<body>
<button class="tablink" onclick="openPage('Home', this, '#FFE082')">Hesap Bilgilerim</button>
<button class="tablink" onclick="openPage('Contact', this, '#FFE082')">Şifre Değiştir</button>

<div id="Home" class="tabcontent">
  <h3>Hesap Bilgileriniz</h3>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Adınız</th>
      <th scope="col">Soyadınız</th>
      <th scope="col">T.C. Kimlik Numaranız</th>
      <th scope="col">Şifreniz</th>
      <th scope="col">Telefon Numaranız</th>
      <th scope="col">Cinsiyetiniz</th>
    </tr>
  </thead>
  
  <?php
              session_start();
              $db=new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charsset=UTF8","root","");
              $query=$db->query("SELECT * FROM hastalar WHERE tc='{$_SESSION['user']['tc']}'",PDO::FETCH_OBJ);

              if($query->rowCount()){
                foreach($query as $hasta){
            ?>
    <tbody>
    <tr>
      <th scope="row">1</th>
        <td><?= $hasta->ad ?></td>
        <td><?= $hasta->soyad ?></td>
        <td><?= $hasta->tc ?></td>
        <td><?= $hasta->sifre ?></td>
        <td><?= $hasta->tel ?></td>
        <td><?= $hasta->cinsiyet ?></td>
    </tr>
    <?php } } ?>
  </tbody>
</table>
</div><br>


<div id="Contact" class="tabcontent">
  <div class="container">
  <div class="giris">
  <h3>Şifre Değiştirme Sayfası</h3>
	<!-- Kullanıcı giriş bilgilerini aldığımız kısım başlangıcı -->
    <form action="" method="POST">
		<div class="pc">
			<input type="password" required="" name="eskisifre">
			<span> Şifrenizi Giriniz: </span>
    </div>
		<div class="pc">
			<input type="password" required="" name="yenisifre">
			<span> Yeni Şifrenizi Giriniz: </span>
    </div>
		<div class="pc">
			<input type="submit" value="Değiştir">
    </div>
  </form>
  <?php 
    include('sifreguncelleme.php');
  ?>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click(); 
</script>

</body>
</html>