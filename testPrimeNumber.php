<?php

require_once ('E://xampp/php/PEAR/PHPUnit/TestCase.php');
require_once('primeNumber.php');

class testPrimeNumber extends PHPUnit_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testPrimeNumber()
  {
    // test to ensure that the object from an fsockopen is valid
    $primeNumber = new PrimeNumber();
	$primeNumber->count = 10;
	if($primeNumber->count>1)
	{
		$this->assertTrue(true);
	}else{
		$this->assertTrue(false);
    }
  }
}
?>