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
        $cleanString = $this->cleanString($a);
        $arrayCut = $this->cut($cleanString);
        $binary = $this->putInArrayKey($arrayCut);
        return $this->calculateNumber($binary);
    }

    function calculateNumber($array): int
    {
        $result = 0;
        foreach ($array as $key => $value) {
            if ($value) {
                /** 1 2 4 8 16 32 */
                $result += match ($key) {
                    1 => 1,
                    2 => 2,
                    3 => 4,
                    4 => 8,
                    5 => 16,
                    6 => 32,
                };
            }
        }
        return $result;
    }

    function putInArrayKey(array $allCardInArray): array
    {
        $array = [];
        foreach ($allCardInArray as $value) {
            $keyValue = explode(':', $value);
            $key = (int) $keyValue[0];
            $valueCard = (string) $keyValue[1];
            if ($valueCard === 'Yes') {
                $array[$key] = true;
            }
            IF ($valueCard === 'No') {
                $array[$key] = false;
            }
        }
        return $array;
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