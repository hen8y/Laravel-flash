# laravel-flash

## Installation

[PHP](https://php.net) 8.0, [LARAVEL](https://laravel.com), and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Flash, simply require it

```bash
composer require hen8y/laravel-flash
```

Or add the following line to the require block of your `composer.json` file.

```php
hen8y/laravel-flash": "1.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

To reload your application run the following command:

```bash
    composer dump-autoload

```

Once Laravel Flash is installed, you need to register the service provider. Open up config/app.php and add the following to the providers key.

```php
'providers' => [
    ...
    Hen8y\Flash\FlashServiceProvider::class,
    ...
]

```

You can publish the configuration file and assets by running:

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

];

```

You can define the timeout for your flash notification in the config file

## Usage

- Include the flash component to your layout @include('flash::components.flash')
- Add @flashCss and @flashJs for js and css.

Example

```blade

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @flashCss

    </head>
    <body class="antialiased">

        @include('flash::components.flash')
        @flashJs
    </body>
</html>

```

### Basic Usage

To display a flash message, you call the `flash` method. it accepts 2 parameter

- Type (There 3 types of notifications: Info, success, error)
- Message.

The message type must always be lower case

Example Usage:

```php
    Route::get('/test', function () {

        flash('info', 'This is a info message');

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
