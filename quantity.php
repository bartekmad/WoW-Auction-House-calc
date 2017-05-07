<?php
include 'login.php';

function getQuantity($pmConn, $pmItemNumber, &$pmQuantity){
	$queryPrice = "SELECT * FROM auctions WHERE item = ".$pmItemNumber."";

	$queryPrice_run = mysqli_query($pmConn, $queryPrice) or exit(mysqli_error($pmConn));
	
	$pmQuantity= 0;
	while ($num = mysqli_fetch_assoc ($queryPrice_run)) {
		$pmQuantity += $num['quantity'];
	}
}
//KWIATKI
getQuantity($conn, 124101, $quantityAethril); //Aethril
getQuantity($conn, 124102, $quantityDreamleaf); //Dreamleaf
getQuantity($conn, 124103, $quantityFoxflower); //Foxflower
getQuantity($conn, 124104, $quantityFjarnskaggl); //Fjarnskaggl
getQuantity($conn, 124105, $quantityStarlight); //Starlight Rose
getQuantity($conn, 128304, $quantityYseralline); //Yseralline Seed
getQuantity($conn, 124106, $quantityFelwort); //Felwort 

//FLASKI
getQuantity($conn, 127850, $quantityScars); //Flask of Ten Thousand Scars
getQuantity($conn, 127849, $quantityArmies); //Flask of the Countless Armies
getQuantity($conn, 127848, $quantityDemon); //Flask of the Seventh Demon
getQuantity($conn, 127847, $quantityPact); //Flask of the Whispered Pact

//POTKI
getQuantity($conn, 127846, $quantityLeytorrent); //Leytorrent Potion
getQuantity($conn, 127843, $quantityGrace ); //Potion of Deadly Grace 
getQuantity($conn, 127844, $quantityOldWar); //Potion of the Old War
getQuantity($conn, 127845, $quantityUnbending); //Unbending Potion
getQuantity($conn, 127834, $quantityHealing); //Ancient Healing Potion
getQuantity($conn, 127835, $quantityMana); //Ancient Mana Potion

//INNE
getQuantity($conn, 127842, $quantityAlchemistStone); //Infernal Alchemist Stone 
getQuantity($conn, 124444, $quantityBrimstone); //Infernal Brimstone
getQuantity($conn, 124125, $quantityObliterum); //Obliterum
?>