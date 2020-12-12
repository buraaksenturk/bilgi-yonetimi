<?php
    include('randevugecmisivt.php');

    $sorgu=$vt -> prepare('SELECT * FROM randevular');
    $sorgu->execute();
    $randevulist=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Ktü Randevu Sistemi</title>
<meta charset="UTF-8">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Ktü Farabi</title>
    <style>
    body{
        background: url('../fotograflar/randevugecmis.jpg');
        height:100%;
        background-position: 50%;
        background-size:cover;
        background-attachment: fixed;
    }
    .text{
      font-size:36px;
      text-align: center;
      color: white;
      text-shadow: 1px 3px 3px  black;
      font-weight: bold;
      margin-top:20px;
    }
    .container{
      margin-top:60px;
    }
    </style>
  </head>
  <body>
    <div class="text">Ktü Farabi Hastanesi Geçmiş Randevularınız</div>
    <div class="container">
      <div class="row justtify-content-center">
        <div class="col">
          <table class="table table-bordered table-striped table-dark">
            <tr>
              <td>#</td>
              <td>KLİNİK</td>
              <td>DOKTOR</td>
              <td>TARİH</td>
              <td>TC</td>
              <td>SAAT</td>
            </tr>
            
            <?php
              session_start();
              $db=new PDO("mysql:host=localhost;dbname=bilgiyonetimi;charsset=UTF8","root","");
              $query=$db->query("SELECT DISTINCT randevular.randevu_id, klinik.klinik_adi, doktor.unvan_ad_soyad, randevular.tarih,randevular.tc,randevular.saat FROM randevular JOIN klinik ON randevular.doktor=klinik.klinik_id LEFT JOIN doktor ON klinik.klinik_id=doktor.doktor_id WHERE randevular.tc='{$_SESSION['user']['tc']}'",PDO::FETCH_OBJ);

              if($query->rowCount()){
                foreach($query as $rand){
            ?>
            
            <tr>
              <td><?= $rand->randevu_id ?></td>
              <td><?= $rand->klinik_adi ?></td>
              <td><?= $rand->unvan_ad_soyad ?></td>
              <td><?= $rand->tarih ?></td>
              <td><?= $rand->tc ?></td>
              <td><?= $rand->saat ?></td>
            </tr>

            <?php } } ?>

          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>