<?php

namespace Hardikkhorasiya09\ChangeLoginField;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Hardikkhorasiya09\ChangeLoginField\Filament\LoginForm;

class ChangeLoginFieldPlugin implements Plugin
{
  use EvaluatesClosures;

  /**
   * @var bool|Closure|mixed
   */
  protected bool $visible = true;

  public function getId(): string
  {
    return ChangeLoginFieldServiceProvider::$name;
  }

  public function register(Panel $panel): void
  {
    $panel
      ->login(LoginForm::class);
  }

  public function boot(Panel $panel): void
  {
    //
  }

  public static function make(): static
  {
    return app(static::class);
  }
}
