<?php

use Carbon\Carbon;

function presentPrice($price)
{
    return 'RM'.number_format($price / 100, 2);
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}
