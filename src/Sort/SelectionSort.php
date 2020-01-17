<?php

namespace Src\Sort;

class SelectionSort {

    /**
     * Sorts array of un-sorted items in ascending order
     * Based on selection sort algorithm
     *
     * @param array $items
     * @return array
     */
    public function sort(array $items): array {

        $count = count($items);

        if($count <= 1) {
            return $items;
        }

        for($i = 0; $i < $count; $i++) {
            $index = $this->findMinIndex($items, $i, $count);
            $items = $this->swap($items, $i, $index);
        }

        return $items;
    }

    /**
     * Find the minimum value's index in the list
     *
     * @param array $items
     * @param int $startIndex
     * @param int $count
     * @return int
     */
    private function findMinIndex(array $items, int $startIndex, int $count): int {

        $minValue = $items[$startIndex];
        $minIndex = $startIndex;

        for($i = $startIndex + 1; $i < $count; $i++) {

            if($items[$i] < $minValue) {
                $minIndex = $i;
                $minValue = $items[$i];
            }
        }

        return $minIndex;
    }

    /**
     * Swap new minimum value with the selected value
     *
     * @param array $items
     * @param int $selectedIndex
     * @param int $newIndex
     * @return array
     */
    private function swap(array $items, int $selectedIndex, int $newIndex): array {

        $temp = $items[$selectedIndex];
        $items[$selectedIndex] = $items[$newIndex];
        $items[$newIndex] = $temp;

        return $items;
    }
}