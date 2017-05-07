<?php
include 'login.php';
include 'lowestprice.php';

//wczytanie jsona
ini_set('memory_limit', '-1');
$jsondata = file_get_contents('https://eu.api.battle.net/wow/auction/data/defias-brotherhood?locale=en_GB&apikey=cw9dq8devpdvx3pn5t68y8qc57rp8582');
$data = json_decode($jsondata, true);
$auctionsFile = file_get_contents($data['files'][0]['url']);
$decode = json_decode($auctionsFile, true);

$auctions = $decode['auctions'];


//stowrzenie tabelki, jesli nie ma(czyli tylko na starcie ;p)
$sql = "CREATE TABLE IF NOT EXISTS auctions (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	item int(30) NOT NULL,
	buyout int(30) NOT NULL,
	quantity int(30)
)";
mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$sql = "CREATE TABLE IF NOT EXISTS status (
	server_name varchar(45),
	date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";
mysqli_query($conn, $sql) or exit(mysqli_error($conn));


file_put_contents("file.txt", "");

$file = 'file.txt';

$data01 = $formatedScars;
$data02 = $formatedArmies;
$data03 = $formatedDemon;
$data04 = $formatedPact;

$data11 = $formatedLeytorrent;
$data12 = $formatedGrace;
$data13 = $formatedOldWar;
$data14 = $formatedUnbending;
$data15 = $formatedHealing;
$data16 = $formatedMana;

$data21 = $formatedAlchemistStone;
$data22 = $formatedObliterum;

$data31 = $formatedAethril;
$data32 = $formatedDreamleaf;
$data33 = $formatedFoxflower;
$data34 = $formatedFjarnskaggl;
$data35 = $formatedStarlight;
$data36 = $formatedFelwort;
$data37 = $formatedYseralline;
$data38 = $formatedBrimstone;

$enter = "".PHP_EOL;


file_put_contents($file, $data01 . $enter . $data02 . $enter . $data03 . $enter . $data04 . $enter . $data11 . $enter . $data12 . $enter . $data13 . $enter . $data14 . $enter . $data15 . $enter . $data16 . $enter . $data21 . $enter . $data22 . $enter . $data31 . $enter . $data32 . $enter . $data33 . $enter . $data34 . $enter . $data35 . $enter . $data36 . $enter . $data37 . $enter . $data38, FILE_APPEND | LOCK_EX);



//usuniecie wszystkich danych
$sql = "TRUNCATE TABLE auctions";
mysqli_query($conn, $sql) or exit(mysqli_error($conn));

$sql = "TRUNCATE TABLE status";
mysqli_query($conn, $sql) or exit(mysqli_error($conn));

//do mysqla
 $sql = "INSERT INTO auctions (item, buyout, quantity) values ";
 $valuesArr = array();
 
 foreach($auctions as $row){
	 $item = (int) $row['item'];
	 $buyout = (int) $row['buyout'];
	 $quantity = (int) $row['quantity'];
	 
	 $valuesArr[] = "('$item', '$buyout', '$quantity')";
 }
 
  $sql .= implode(',', $valuesArr);
 mysqli_query($conn, $sql) or exit(mysqli_error($conn));
 
 $sql = "INSERT INTO status (server_name) VALUES('Defias Brotherhood')";
mysqli_query($conn, $sql) or exit(mysqli_error($conn));

?>