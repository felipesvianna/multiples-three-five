<?php
require_once('ListGenerator.php');
require_once('ListOperator.php');

// ----------

$listGenerator = new ListGenerator();
$listOperator = new ListOperator();

$oneToHundredList = $listGenerator->generateOneToHundredList();

$indexesMultiplesThree = $listGenerator->generateListMultiplesOfThree();
$indexesMultiplesFive = $listGenerator->generateListMultiplesOfFive();
$indexesMultiplesThreeAndFive = $listGenerator->generateListMultiplesOfThreeAndFive();

$listOperator->inputStringOnIndexesOfAList('ThreeAndFive', $oneToHundredList, $indexesMultiplesThreeAndFive);
$listOperator->inputStringOnIndexesOfAList('Three', $oneToHundredList, $indexesMultiplesThree);
$listOperator->inputStringOnIndexesOfAList('Five', $oneToHundredList, $indexesMultiplesFive);

echo '<br><br><b>Multiples of Three And Five</b><br><br>';
$listOperator->printList($oneToHundredList);

?>