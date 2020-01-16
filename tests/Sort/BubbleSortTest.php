<?php

use PHPUnit\Framework\TestCase;
use Src\Sort\BubbleSort;

class BubbleSortTest extends TestCase {

    private $bubbleSort;
    private const UNSORTED_LIST = [2, 5, 7, 6, 4, 3, 1];
    private const SORTED_LIST_ASC = [1, 2, 3, 4, 5, 6, 7];
    private const SORTED_LIST_DESC = [7, 6, 5, 4, 3, 2, 1];

    public function setUp(): void {
        parent::setUp();
        $this->bubbleSort = new BubbleSort();
    }

    public function testIfCanSortAscCorrectly() {
        $this->assertEquals(
            self::SORTED_LIST_ASC,
            $this->bubbleSort->sort(self::UNSORTED_LIST, BubbleSort::ASC)
        );
    }

    public function testIfCanSortDescCorrectly() {
        $this->assertEquals(
            self::SORTED_LIST_DESC,
            $this->bubbleSort->sort(self::UNSORTED_LIST, BubbleSort::DESC)
        );
    }

    public function testIfInvalidArgumentCatchesException() {
        $this->expectException(InvalidArgumentException::class);
        $this->bubbleSort->sort(self::UNSORTED_LIST, 'asc');
    }
}