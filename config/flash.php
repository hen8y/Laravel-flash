<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    |
    | Specifies the duration, in seconds, for which the notification will remain visible.
    |
    */
    "timeout" => 2000,
    /*
    |--------------------------------------------------------------------------
    | Enable Cancel Button
    |--------------------------------------------------------------------------
    |
    | Enable the close notification button
    |
    |
    */
    "enable_cancel_btn" => true,

     /*
    |--------------------------------------------------------------------------
    | Cancel Button Type
    |--------------------------------------------------------------------------
    |
    | Choose if the flash notification should be svg or text.
    |
    */
    "cancel_btn_type" => "svg",
    /**
     * If text is chosen as btn_type, enter the text to be chosen below or
     * leave default
     *
     */

    "btn_text" => "close",

    /*
    |--------------------------------------------------------------------------
    | Flash Theme Colors
    |--------------------------------------------------------------------------
    |
    | Specify the theme colors you want for your flash notification.
    | If dark mode if enabled this would be used as light mode theme
    |
    | MUST BE HEX.
    |
    */
    "theme" => [
        "info" => "#232113",
        "success" => "#166534",
        "error" => "#b91c1c",
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable Dark Mode
    |--------------------------------------------------------------------------
    |
    | Set dark mode to true and specify the colors you want for your dark mode.
    |
    | MUST BE HEX.
    |
    */
    "enable_dark_mode" => false,

    "dark-theme" => [
        "info" => "#232113",
        "success" => "#22c55e",
        "error" => "#b91c1c",
    ]

];
