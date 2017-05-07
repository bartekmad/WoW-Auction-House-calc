<?php
include 'login.php';

function getPrices($pmConn, $pmItemNumber, &$pmLowestPrice, &$pmCheapestQuantity){
	$queryPrice = "SELECT buyout/quantity AS lowest, quantity FROM auctions WHERE item = ".$pmItemNumber." AND buyout != 0 ORDER BY (buyout/quantity) LIMIT 1";

	$queryPrice_run = mysqli_query($pmConn, $queryPrice) or exit(mysqli_error($pmConn));
	
	$productCount = mysqli_num_rows($queryPrice_run); // count the output amount
	if ($productCount > 0) {
		while($row = mysqli_fetch_array($queryPrice_run, MYSQLI_ASSOC)){
			$lowest = $row['lowest'];
			$pmCheapestQuantity = $row['quantity'];
		}
	}
	$pmLowestPrice = $lowest/10000;
	$pmLowestPrice = number_format($pmLowestPrice, 2, '.', '');
}

//KWIATKI
getPrices($conn, 124101, $formatedAethril, $cheapestQuantityAethril); //Aethril
getPrices($conn, 124102, $formatedDreamleaf, $cheapestQuantityDreamleaf); //Dreamleaf
getPrices($conn, 124103, $formatedFoxflower, $cheapestQuantityFoxflower); //Foxflower
getPrices($conn, 124104, $formatedFjarnskaggl, $cheapestQuantityFjarnskaggl); //Fjarnskaggl
getPrices($conn, 124105, $formatedStarlight, $cheapestQuantityStarlight); //Starlight Rose
getPrices($conn, 128304, $formatedYseralline, $cheapestQuantityYseralline); //Yseralline Seed
getPrices($conn, 124106, $formatedFelwort, $cheapestQuantityFelwort); //Felwort 
getPrices($conn, 124125, $formatedObliterum, $cheapestQuantityObliterum); //Obliterum

//FLASKI
getPrices($conn, 127850, $formatedScars, $cheapestQuantityScars); //Flask of Ten Thousand Scars
getPrices($conn, 127849, $formatedArmies, $cheapestQuantityArmies); //Flask of the Countless Armies
getPrices($conn, 127848, $formatedDemon, $cheapestQuantityDemon); //Flask of the Seventh Demon
getPrices($conn, 127847, $formatedPact, $cheapestQuantityPact); //Flask of the Whispered Pact

//POTKI
getPrices($conn, 127846, $formatedLeytorrent, $cheapestQuantityLeytorrent); //Leytorrent Potion
getPrices($conn, 127843, $formatedGrace , $cheapestQuantityGrace ); //Potion of Deadly Grace 
getPrices($conn, 127844, $formatedOldWar, $cheapestQuantityOldWar); //Potion of the Old War
getPrices($conn, 127845, $formatedUnbending, $cheapestQuantityUnbending); //Unbending Potion
getPrices($conn, 127834, $formatedHealing, $cheapestQuantityHealing); //Ancient Healing Potion
getPrices($conn, 127835, $formatedMana, $cheapestQuantityMana); //Ancient Mana Potion

//INNE
getPrices($conn, 127842, $formatedAlchemistStone, $cheapestQuantityAlchemistStone); //Infernal Alchemist Stone 
getPrices($conn, 124444, $formatedBrimstone, $cheapestQuantityBrimstone); //Infernal Brimstone
?>

