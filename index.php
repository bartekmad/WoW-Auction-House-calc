<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script><script>var wowhead_tooltips = { "colorlinks": false, "iconizelinks": true, "renamelinks": true }</script>
</head>
<?php
include 'lowestprice.php';
include 'quantity.php';
include 'profit.php';
include 'login.php';

$query = "SELECT date_time FROM status";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo "Ostatnia Aktualizacja: ", $row['date_time'];

$file = 'file.txt';

//https://theunderminejournal.com/#eu/defias-brotherhood/category/herbalism



echo '<div id="page-wrap">';

echo '<div class="divTable">';
echo '<div class="divTableBody">';

echo '<div class="divTableRow">';
echo '<div class="divTableCellHF">Nazwa itemczanu:</div>';
echo '<div class="divTableCellH">10 min temu:</div>';
echo '<div class="divTableCellH">Najniższa cena:</div>';
echo '<div class="divTableCellH">Ilość w stacku:</div>';
echo '<div class="divTableCellH">Ilość na AHu:</div>';
echo '<div class="divTableCellH">Profit:</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127850">Flask of Ten Thousand Scars</a></div>';	
$line = file($file)[0];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedScars,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityScars,'</div>';
echo '<div class="divTableCell">',$quantityScars,'</div>';
getProfit($profitScars);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127849">Flask of the Countless Armies</a></div>';
$line = file($file)[1];
echo '<div class="divTableCell">',$line,'</div>';
echo '<div class="divTableCell">',$formatedArmies,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityArmies,'</div>';
echo '<div class="divTableCell">',$quantityArmies,'</div>';
getProfit($profitArmies);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127848">Flask of the Seventh Demon</a></div>';
$line = file($file)[2];
echo '<div class="divTableCell">',$line,'</div>';
echo '<div class="divTableCell">',$formatedDemon,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityDemon,'</div>';
echo '<div class="divTableCell">',$quantityDemon,'</div>';
getProfit($profitDemon);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127847">Flask of the Whispered Pact</a></div>';
$line = file($file)[3];
echo '<div class="divTableCell">',$line,'</div>';
echo '<div class="divTableCell">',$formatedPact,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityPact,'</div>';
echo '<div class="divTableCell">',$quantityPact,'</div>';
getProfit($profitPact);
echo '</div>';
echo '</div>';
echo '</div>';
echo '<br>';


echo '<div class="divTable" style="border: 1px solid #000;" >';
echo '<div class="divTableBody">';
echo '<div class="divTableRow">';
echo '<div class="divTableCellHF">Nazwa itemczanu:</div>';
echo '<div class="divTableCellH">10 min temu:</div>';
echo '<div class="divTableCellH">Najniższa cena:</div>';
echo '<div class="divTableCellH">Ilość w stacku:</div>';
echo '<div class="divTableCellH">Ilość na AHu:</div>';
echo '<div class="divTableCellH">Profit:</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127846">Leytorrent Potion</a></div>';
$line = file($file)[4];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedLeytorrent,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityLeytorrent,'</div>';
echo '<div class="divTableCell">',$quantityLeytorrent,'</div>';
getProfit($profitLeytorrent);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127843">Potion of Deadly Grace</a></div>';
$line = file($file)[5];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedGrace,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityGrace,'</div>';
echo '<div class="divTableCell">',$quantityGrace,'</div>';
getProfit($profitGrace);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127844">Potion of the Old War</a></div>';
$line = file($file)[6];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedOldWar,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityOldWar,'</div>';
echo '<div class="divTableCell">',$quantityOldWar,'</div>';
getProfit($profitOldWar);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127845">Unbending Potion</a></div>';
$line = file($file)[7];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedUnbending,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityUnbending,'</div>';
echo '<div class="divTableCell">',$quantityUnbending,'</div>';
getProfit($profitUnbending);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127834">Ancient Healing Potion</a></div>';
$line = file($file)[8];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedHealing,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityHealing,'</div>';
echo '<div class="divTableCell">',$quantityHealing,'</div>';
getProfit($profitHealing);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127835">Ancient Mana Potion</a></div>';
$line = file($file)[9];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedMana,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityMana,'</div>';
echo '<div class="divTableCell">',$quantityMana,'</div>';
getProfit($profitMana);
echo '</div>';
echo '</div>';
echo '</div>';
echo '<br>';


echo '<div class="divTable" style="border: 1px solid #000;" >';
echo '<div class="divTableBody">';
echo '<div class="divTableRow">';
echo '<div class="divTableCellHF">Nazwa itemczanu:</div>';
echo '<div class="divTableCellH">10 min temu:</div>';
echo '<div class="divTableCellH">Najniższa cena:</div>';
echo '<div class="divTableCellH">Ilość w stacku:</div>';
echo '<div class="divTableCellH">Ilość na AHu:</div>';
echo '<div class="divTableCellH">Profit:</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=127842">Infernal Alchemist Stone</a></div>';
$line = file($file)[10];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedAlchemistStone,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityAlchemistStone,'</div>';
echo '<div class="divTableCell">',$quantityAlchemistStone,'</div>';
getProfit($profitAlchemistStone);
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124125">Obliterum</a></div>';
$line = file($file)[11];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedObliterum,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityObliterum,'</div>';
echo '<div class="divTableCell">',$quantityObliterum,'</div>';
getProfit($profitObliterum);
echo '</div>';
echo '</div>';
echo '</div>';
echo '<br>';


echo '<div class="divTable" style="border: 1px solid #000;" >';
echo '<div class="divTableBody">';
echo '<div class="divTableRow">';
echo '<div class="divTableCellHF">Nazwa itemczanu:</div>';
echo '<div class="divTableCellH">10 min temu:</div>';
echo '<div class="divTableCellH">Najniższa cena:</div>';
echo '<div class="divTableCellH">Ilość w stacku:</div>';
echo '<div class="divTableCellH">Ilość na AHu:</div>';

echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124101">Aethril</a></div>';
$line = file($file)[12];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedAethril,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityAethril,'</div>';
echo '<div class="divTableCell">',$quantityAethril,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124102">Dreamleaf</a></div>';
$line = file($file)[13];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedDreamleaf,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityDreamleaf,'</div>';
echo '<div class="divTableCell">',$quantityDreamleaf,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124103">Foxflower</a></div>';
$line = file($file)[14];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedFoxflower,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityFoxflower,'</div>';
echo '<div class="divTableCell">',$quantityFoxflower,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124104">Fjarnskaggl</a></div>';
$line = file($file)[15];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedFjarnskaggl,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityFjarnskaggl,'</div>';
echo '<div class="divTableCell">',$quantityFjarnskaggl,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124105">Starlight Rose</a></div>';
$line = file($file)[16];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedStarlight,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityStarlight,'</div>';
echo '<div class="divTableCell">',$quantityStarlight,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124106">Felwort</a></div>';
$line = file($file)[17];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedFelwort,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityFelwort,'</div>';
echo '<div class="divTableCell">',$quantityFelwort,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=128304">Yseralline Seed</a></div>';
$line = file($file)[18];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedYseralline,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityYseralline,'</div>';
echo '<div class="divTableCell">',$quantityYseralline,'</div>';
echo '</div>';

echo '<div class="divTableRow">';
echo '<div class="divTableCell"><a href="#" rel="item=124444">Infernal Brimstone</a></div>';
$line = file($file)[19];
echo '<div class="divTableCell">',$line,'</div>';	
echo '<div class="divTableCell">',$formatedBrimstone,'</div>';
echo '<div class="divTableCell">',$cheapestQuantityBrimstone,'</div>';
echo '<div class="divTableCell">',$quantityBrimstone,'</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
?>