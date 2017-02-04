<?php

/**
 * Integer to float or reverse
 */
function format($n, $insert = false)
{
    if ($insert) {
        $n = str_replace(',', '.', $n);
        $n = preg_match('/[0-9]+\.[0-9]{4}/', $n, $ns);

        return $ns[0] * 10000;
    }

    return $n / 10000;
}

