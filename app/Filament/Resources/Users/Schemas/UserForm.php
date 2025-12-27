<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Resources\Pages\Page;

use function Laravel\Prompts\text;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;

class UserForm
{
  public static function configure(Schema $schema): Schema
  {
    return $schema

      ->components([

        TextInput::make('name')
          ->label(app()->getLocale() === 'ar' ? 'اسم المستخدم' : 'User Name')
          ->required()
          ->maxLength(255),

        TextInput::make('email')
          ->label(app()->getLocale() === 'ar' ? 'البريد الالكتروني' : 'Email')
          ->email()
          ->required()
          ->unique(ignoreRecord: true),
        TextInput::make('password')
        ->label(app()->getLocale() === 'ar' ? 'كلمة السر' : 'password')
          ->password()
          ->dehydrateStateUsing(fn($state) => Hash::make($state))
          ->dehydrated(fn($state) => filled($state))
          ->required(fn(string $context): bool => $context === 'create'),

        // TextInput::make('password')
        //     ->password()
        //     ->required(fn ($context) => $context === 'create')
        //     ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null) // تشفير قبل الحفظ
        //     ->dehydrated(fn ($state) => filled($state)) 
        //     ->label('كلمة المرور'),

        Select::make('roles')
        ->label(app()->getLocale() === 'ar' ? 'الأدوار ' : 'Roles')
        ->multiple() 
        ->relationship('roles', 'role_name') 
          // ->options([
          //   0 => 'User  ',
          //   1 => 'Admin',
          //   2 => 'Super Admin',
          // ])
        //     ->required(),   
      ]);
  }
}
