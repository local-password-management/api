<?php

function between(int $start, int $number, int $stop)
{
    return in_array($number, range($start, $stop));
}