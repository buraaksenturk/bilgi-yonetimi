<?php 

try{
	$host='localhost';
	$vtadi='bilgiyonetimi';
	$kullanici='root';
	$sifre='';
	$vt = new PDO("mysql:host=$host;dbname=$vtadi","$kullanici","$sifre");
}
catch(PDOException $e){
	print $e->getMessage();
}

?>