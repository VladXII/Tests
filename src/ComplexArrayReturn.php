<?php


namespace App;


class ComplexArrayReturn
{
    /**
     * @param array $arr
     * @return array
     */
    public function arrayStatistics($arr)
    {
        $min = $arr[0];
        $max = $arr[0];
        $length = 0;
        $total = 0;
        foreach ($arr as $num) {
            $length++;
            $total += $num;
            if ($min > $num) {
                $min = $num;
            }
            if ($max < $num) {
                $max = $num;
            }
        }

        return array($min, $max, $length, ($total / $length));
    }

}