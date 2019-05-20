<?php
/*
Objective: Write a program that prints out a multiplication table of the first 10 prime numbers. 
The program must run from the command line and print to screen one table. 
Across the top and down the left side should be the 10 primes, and the body of the table should contain the product of multiplying these numbers. 

An example of the way the program may run: 

<program_name> ­­count 10 

*/

ini_set('max_execution_time',0);
include "primeNumber.php";
include "testPrimeNumber.php";
if(isset($argv)){
$count=$argv['count'];
}else{
$count=$_REQUEST['count'];
}


$primeNumber = new primeNumber();
$primeNumber->count=$count;
$primeNumber->generatePrimeNumbers($count);
$displayContent = $primeNumber->displayPrimeNumbers();
?>
<div id="#primeNumbers">
<?=$displayContent;?>
</div>
<?
$testPrimeNumber = new testPrimeNumber();
$displaytestContent = $testPrimeNumber->testPrimeNumber(); 
?>
<div id="#testprimeNumbers">
<?=$displaytestContent;?>
</div>
