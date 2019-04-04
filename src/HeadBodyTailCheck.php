<?php

namespace App;

class HeadBodyTailCheck
{
    /**
     * @param string $mainStr
     * @param string $head
     * @param string $body
     * @param string $tail
     * @return string
     */
    public function verifySubStr(string $mainStr, string $head, string $body, string $tail)
    {
        $validator = (preg_match('/^'.$head.'/', $mainStr) &&
            preg_match('/'.$body.'/', $mainStr) &&
            preg_match('/'.$tail.'$/', $mainStr));

        return $validator ? "My head, body, and tail." : "Incompatible.";
    }
}
