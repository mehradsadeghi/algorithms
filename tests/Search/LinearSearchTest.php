<?php

use PHPUnit\Framework\TestCase;
use Src\Search\LinearSearch;

class LinearSearchTest extends TestCase {

    private $linearSearch;
    private const LIST = [1, 5, 4, 2, 7, 6];

    public function setUp():void {
        parent::setUp();
        $this->linearSearch = new LinearSearch();
    }

    public function testIfFoundIndexIsCorrect() {
        $target = 5;
        $this->assertEquals(1, $this->linearSearch->search(self::LIST, $target));
    }

    public function testIfItemCanNotBeFound() {
        $target = 9;
        $this->assertEquals(-1, $this->linearSearch->search(self::LIST, $target));
    }
}