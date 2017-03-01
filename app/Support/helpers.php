<?php

/**
 * Integer to float or reverse
 */
function format($number)
{
    if (preg_match('/[^\d]/', $number) === 0) {

        return $number / 10000;
    }
    $clean = explode(',', $number);

    return ($clean[0] . substr($clean[1], 0, 4)) * 1;
}


