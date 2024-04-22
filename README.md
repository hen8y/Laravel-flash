# laravel-flash

## Demo

Checkout demo of the [laravel-flash](https://hen8y.dev/demo/flash)

## Installation

[PHP](https://php.net) 8.0, [LARAVEL](https://laravel.com), and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Flash, simply require it

```bash
composer require hen8y/laravel-flash
```

Or add the following line to the require block of your `composer.json` file.

```php
"hen8y/laravel-flash": "^2."
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Flash is installed, you need to register the service provider. Open up config/app.php and add the following to the providers key.

```php
'providers' => [
    ...
    Hen8y\Flash\FlashServiceProvider::class,
    ...
]

```

To reload your application run the following command:

```bash
composer dump-autoload

```

You can publish the configuration file and assets by running:

If you're also upgrading from `v1.*` make sure to delete the `public/vendor/hen8y/laravel-flash` folder and run this too

```bash
    php artisan vendor:publish --provider="Hen8y\Flash\LaravelFlashServiceProvider"

```

### Details of the Config file

The configuration-file `flash.php` would be published in your config dirctory after running the above command:

```php

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


```

You can define the timeout, flash theme colors for your flash notification in the config file

## Usage

- Include the flash component to your main layout immediately after your body tag `<x-flash::flash />`
- Add `@flashCss` in your main layout before all css files.

Example

```blade

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @flashCss
        {{-- Your Css here --}}
    </head>
    <body class="antialiased">
        <x-flash::flash />
        <div>

        <!-- Your content -->

        </div>
    </body>
</html>

```

### Basic Usage

To display a flash message, you call the `flash` method. it accepts 2 parameter

- Type ( There 3 types of notifications: `Info`, `success`, `error` )
- Message.

The message type must always be lower case

Example Usage:

```php
    Route::get('/test', function () {

        flash('info', 'This is an info message');

        return redirect('/');

    });
```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

Don't forget to [follow me on twitter](https://twitter.com/hen8y)!

Thanks!
Ogbonna Henry (hen8y).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
