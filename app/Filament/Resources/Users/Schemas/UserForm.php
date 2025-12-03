<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('username')
                    ->required(),
                TextInput::make('email_verified_at')
                    ->email()
                    ->default(null),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Toggle::make('status')
                    ->required(),
                Toggle::make('mobile')
                    ->required(),
            ]);
    }
}
