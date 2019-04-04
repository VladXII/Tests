<?php

namespace App;

class ReplaceWurst
{
    /**
     * @param string $str
     * @return mixed
     */
    public function replacer(string $str)
    {
        $nonGerman = [
            'Kielbasa',
            'Chorizo',
            'Moronga',
            'Salami',
            'Sausage',
            'Andouille',
            'Naem',
            'Merguez',
            'Gurka',
            'Snorkers',
            'Pepperoni',
        ];

        return str_ireplace($nonGerman, 'Wurst', $str);
    }
}
