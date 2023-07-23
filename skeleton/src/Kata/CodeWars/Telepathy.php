<?php 

namespace App\Kata\CodeWars;

/**
 * TODO : kata https://www.codewars.com/kata/64ad571aa33413003e712168/train/php
 * 120 lign max
 */
class Telepathy
{
    function magicShow (string $a): int
    {
    return 47;
    }

    function putInArrayKey(array $allCardInArray): array
    {
    $array = [];
    foreach ($allCardInArray as $value) {
        $keyValue = explode(':', $value);
        if ($value === 'YES') {
            
        }
    }
    return [];
    }

    function cut(string $allCards): array
    {
    return explode(';', $allCards);
    }

    function cleanString(string $string): string
    {
    $separatorChange = str_replace(' | ', ';', $string);
    $withoutPipe = str_replace(['| ', ' |'], '', $separatorChange);
    return str_replace([' ', 'Card'], '', $withoutPipe);
    }
}