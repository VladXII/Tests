<?php

namespace App;

class SumFromSingle
{
    /**
     * @param int $x
     * @return int
     */
    public function addFromSingle(int $x)
    {
        $result = 0;
        for ($i = 0; $i <= $x; $i++) {
            $result += $i;
        }

        return $result;
    }
}
