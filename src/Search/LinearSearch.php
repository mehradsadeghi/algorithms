<?php

namespace Src\Search;

class LinearSearch {

    public function search(array $haystack, int $target) {

        $count = count($haystack);

        for($i = 0; $i < $count; $i++) {

            if($haystack[$i] === $target) {
                return $i;
            }
        }

        return -1;
    }
}