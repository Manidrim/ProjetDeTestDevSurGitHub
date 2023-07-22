<?php

namespace App\Domain\Action;

class Calculation
{
    /**
     * @param int[] $numbers
     **/
    public function addition(array $numbers): int
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }

        return $result;
    }
}