<?php
include 'login.php';

function getProfit($pmProfit){
	if ($pmProfit > 0){
		echo '<div class="divTableCell" style="color:#009600; font-weight:bold;">',number_format($pmProfit, 2, '.', ''),'</div>';
	}
	else{
		echo '<div class="divTableCell">',number_format($pmProfit, 2, '.', ''),'</div>';
	}
}

//FLASKI
$profitScars = $formatedScars - (7*$formatedStarlight + 10*$formatedAethril + 10*$formatedDreamleaf); //Flask of Ten Thousand Scars
$profitArmies = $formatedArmies - (7*$formatedStarlight + 10*$formatedAethril + 10*$formatedFoxflower); //Flask of the Countless Armies
$profitDemon = $formatedDemon - (7*$formatedStarlight + 10*$formatedFoxflower + 10*$formatedFjarnskaggl); //Flask of the Seventh Demon
$profitPact = $formatedPact - (7*$formatedStarlight + 10*$formatedFjarnskaggl + 10*$formatedDreamleaf); //Flask of the Whispered Pact

//POTKI
$profitLeytorrent = $formatedLeytorrent - ($formatedStarlight + 2*$formatedAethril + 2*$formatedDreamleaf); //Leytorrent Potion
$profitGrace = $formatedGrace - ($formatedStarlight + 2*$formatedFjarnskaggl + 2*$formatedDreamleaf); //Potion of Deadly Grace
$profitOldWar = $formatedOldWar - ($formatedStarlight + 2*$formatedFoxflower + 2*$formatedFjarnskaggl); //Potion of the Old War
$profitUnbending = $formatedUnbending - ($formatedStarlight + 2*$formatedAethril + 2*$formatedFoxflower); //Unbending Potion
$profitHealing = $formatedHealing - 4*$formatedYseralline; //Ancient Healing Potion
$profitMana = $formatedMana - 5*$formatedYseralline; //Ancient Mana Potion

//INNE
$profitAlchemistStone = $formatedAlchemistStone - ($formatedBrimstone + 5*$formatedFelwort); //Inferlan Alchemist Stone
$profitObliterum = 1.46*$formatedObliterum - $formatedAlchemistStone; // Obliterum
?>