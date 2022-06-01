<?php


if (!function_exists('active')) {
    function active($url)
    {
        if (request()->segment(0) == $url) {
            return 'current';
        } elseif (request()->segment(1) == $url) {
            return 'current';
        } else {
            return '';
        }

    }
}


