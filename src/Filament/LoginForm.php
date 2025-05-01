<?php

namespace Hardikkhorasiya09\ChangeLoginField\Filament;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Filament\Pages\Auth\Login as BaseAuth;
use Illuminate\Validation\ValidationException;

class LoginForm extends BaseAuth
{
  public function form(Form $form): Form
  {
    return $form
      ->schema([
        $this->getMobileFormComponent(),
        $this->getPasswordFormComponent()
          ->default(config('change-login-field.default_password_value'))
          ->extraInputAttributes(['tabindex' => 2]),
        $this->getRememberFormComponent(),
      ])
      ->statePath('data');
  }

  protected function getMobileFormComponent(): Component
  {
    return config(
      'change-login-field.component',
      TextInput::make('mobile')
        ->label(__('filament-panels::pages/auth/login.fields.mobile.label'))
        ->required()
        ->tel()
        ->autofocus()
        ->extraInputAttributes(['tabindex' => 1])
    );
  }

  protected function getCredentialsFromFormData(array $data): array
  {
    return [
      config('change-login-field.column') => $data[config('change-login-field.column')],
      'password' => $data['password'],
      ...(config('change-login-field.extra_login_fields') ?? []),
    ];
  }

  protected function throwFailureValidationException(): never
  {
    throw ValidationException::withMessages([
      'data.' . config('change-login-field.column') => __('filament-panels::pages/auth/login.messages.failed'),
    ]);
  }
}
