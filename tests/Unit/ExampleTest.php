<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{

    public function testTwoPlusTwoResultsInFour(){
        $this -> assertEquals(6,2+2);
    }

}
