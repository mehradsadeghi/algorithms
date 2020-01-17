<?php

namespace Src\Sort;

class InsertionSort {

    /**
     * Sorts array of un-sorted items in ascending order
     * Based on insertion sort algorithm
     *
     * @param array $items
     * @return array
     */
    public function sort(array $items): array {

        $count = count($items);

        if($count <= 1) {
            return $items;
        }

        for($i = 1; $i < $count; $i++) {

            $j = $i;

            while($j > 0 and $items[$j - 1] > $items[$j]) {

                $key = $items[$j];
                $items[$j] = $items[$j - 1];
                $items[$j - 1] = $key;
                $j--;
            }
        }

        return $items;
    }
}