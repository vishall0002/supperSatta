<?php

/**
 * The function defined here work as global functions to be used in the whole application
 */



 /**
  * Function to format date in d M Y format(24 Feb 2025)
  */
 if (!function_exists('indianDateFormat')) {
    function indian_date($date, $format = 'Y-m-d') {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}
