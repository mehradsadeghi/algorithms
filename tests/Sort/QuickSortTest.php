<?php

use PHPUnit\Framework\TestCase;
use Src\Sort\QuickSort;

class QuickSortTest extends TestCase {

    private $quickSort;
    private const UNSORTED_LIST = [2, 5, 7, 6, 4, 3, 1];
    private const SORTED_LIST = [1, 2, 3, 4, 5, 6, 7];

    public function setUp(): void {
        parent::setUp();
        $this->quickSort = new QuickSort();
    }

    public function testIfCanSortCorrectly() {
        $this->assertEquals(self::SORTED_LIST, $this->quickSort->sort(self::UNSORTED_LIST));
    }
}