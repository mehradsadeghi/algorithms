<?php

use PHPUnit\Framework\TestCase;
use Src\Search\BinarySearch;

class BinarySearchTest extends TestCase {

    private $binarySearch;
    private const Even_Haystack = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    private const Odd_Haystack = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    public function setUp():void {
        parent::setUp();
        $this->binarySearch = new BinarySearch();
    }

    public function testIfFoundIndexInEvenListIsCorrect() {
        $target = 1;
        $this->assertEquals(0, $this->binarySearch->search(self::Even_Haystack, $target));
    }

    public function testIfFoundIndexInOddListIsCorrect() {
        $target = 9;
        $this->assertEquals(8, $this->binarySearch->search(self::Odd_Haystack, $target));
    }

    public function testIfItemCanNotBeFoundInEvenList() {
        $target = 11;
        $this->assertEquals(-1, $this->binarySearch->search(self::Even_Haystack, $target));
    }
}