<?php

namespace Src\Sort;

class QuickSort {

    /**
     * Sorts array of un-sorted items in ascending order
     * Based on quick sort algorithm
     *
     * @param array $items
     * @return array
     */
    public function sort(array $items): array {

        $count = count($items);

        if($count <= 1) {
            return $items;
        }

        $leftSide = $rightSide = [];

        $pivot = array_shift($items);

        foreach($items as $item) {

            if($pivot > $item) {
                $leftSide[] = $item;
            } else if ($pivot <= $item) {
                $rightSide[] = $item;
            }
        }

        $leftSide = $this->sort($leftSide);
        $rightSide = $this->sort($rightSide);

        $items = array_merge($leftSide, [$pivot], $rightSide);

        return $items;
    }
}