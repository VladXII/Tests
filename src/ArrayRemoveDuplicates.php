<?php


namespace App;


class ArrayRemoveDuplicates
{
    /**
     * @param array $arr
     * @return array
     */
    public function duplicatesRemove(array $arr)
    {
        $result = array();
        foreach ($arr as $value) {
            if (!in_array($value, $result)) {
                $result[] = $value;
            }
        }

        return $result;
    }
}