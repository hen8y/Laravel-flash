<?php

use Hen8y\Flash\LaravelFlash;

if (!function_exists('flash')) {
    function flash($type, $message)
    {
        $flash = app(LaravelFlash::class);

        $flash->put($type, $message);
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
