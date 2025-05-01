<?php

namespace Hardikkhorasiya09\ChangeLoginField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ChangeLoginFieldServiceProvider extends PackageServiceProvider
{
  public static string $name = 'change-login-field';

  public function configurePackage(Package $package): void
  {
    $package
      ->name(self::$name)
      ->hasConfigFile();  // Automatically looks for config/change-login-field.php
  }
}
