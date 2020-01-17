<?php

namespace Src\Search;

class LinearSearch {

    /**
     * Search through the list and if the target is found, its index will be returned, otherwise -1 will be returned
     *
     * @param array $haystack
     * @param int $target
     * @return int
     */
    public function search(array $haystack, int $target): int {

        $count = count($haystack);

        for($i = 0; $i < $count; $i++) {

            if($haystack[$i] === $target) {
                return $i;
            }
        }

        return -1;
    }
}