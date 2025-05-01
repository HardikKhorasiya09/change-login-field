# Change Login Field Plugin for Filament

[![Packagist](https://img.shields.io/packagist/v/hardikkhorasiya09/change-login-field)](https://packagist.org/packages/hardikkhorasiya09/change-login-field)

This **Filament Plugin** allows you to customize the login form fields in your Filament-based application. By default, Filament uses the **email** field for login, but this plugin lets you easily switch the login field to **username**, **phone number**, or any custom field of your choice.

## Features

- **Flexible Login Field**: Choose between **email**, **username**, **phone number**, or any custom field for login.
- **Configurable**: Easily configure the login field via the `config/change-login-field.php` configuration file.
- **Seamless Integration**: Works with your existing Filament setup without requiring major code changes.

## Installation and Setup

You can install this plugin via **Composer**.

### Step 1: Install the Plugin

Run the following command to install the package via Composer:

```bash
composer require hardikkhorasiya09/change-login-field
```

### Step 2: Add this into your Filament `PanelProvider` class `panel()`

```php
use Hardikkhorasiya09\ChangeLoginField\ChangeLoginFieldPlugin;

$panel->...
    // ->login() //comment or remove login registration for default setting
    ->plugins([
      ...
      ChangeLoginFieldPlugin::make()      //required to enable this extension
    ]); 
```

### Step 3: Need to run below command
You can publish the config file `change-login-field.php`, by running this command

```bash
php artisan vendor:publish --tag=change-login-field-config
```
