<?php

use Filament\Forms\Components\TextInput;

return [
  /**
   * * The name of the column in the database that you want to use for login.
   * * This should be the same as the name of the field in your login form.
   */
  'column' => 'name',

  /**
   * * The name of the component you want to use for login.
   * * This should be a valid Filament form component.
   */
  'component' => TextInput::make('name')
    ->label('Name')
    ->required()
    ->autofocus()
    ->extraInputAttributes(['tabindex' => 1]),

  /**
   * Set the default value for the password field.
   * This is the value that will be pre-filled in the form.
   */
  'default_password_value' => 'password',

  /**
   * Add extra fields to the login form.
   * This is an array of field names and their corresponding values.
   */
  'extra_login_fields' => [
    // 'status' => 'active',
  ],
];
