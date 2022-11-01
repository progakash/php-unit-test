<?php 
use PHPUnit\Framework\TestCase;

class calculatorTest extends TestCase 
{
	public function testSum()
	{
		$obj = new unitTest\Calculator();
		$result = $obj->sum(5,6);
		$this->assertEquals(11, $result);
	}
}

?>