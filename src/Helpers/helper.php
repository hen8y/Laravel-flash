<?php

if (!function_exists('flash')) {
    function flash($type = null, $message = null)
    {
        $flash = app('flash');
        return $flash->put($type, $message);

    }
}

if (!function_exists('flashCss')) {
    function flashCss()
    {
        return '<link rel="stylesheet" href="' . asset("vendor/hen8y/laravel-flash/assets/flash.css") . '">';
    }
}

if (!function_exists('flashJs')) {
    function flashJs()
    {
        return '<script src="' . asset("vendor/hen8y/laravel-flash/assets/flash.js") . '"></script>';
    }
}

if(!function_exists('lightenBG')) {
    function lightenBG($hex, $percent)
    {
        $hex = str_replace('#', '', $hex);
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        $r = $r + ($percent * (255 - $r));
        $g = $g + ($percent * (255 - $g));
        $b = $b + ($percent * (255 - $b));
        $r = max(0, min(255, $r));
        $g = max(0, min(255, $g));
        $b = max(0, min(255, $b));
        $newHex = sprintf("#%02x%02x%02x", $r, $g, $b);
        return $newHex;
    }
}