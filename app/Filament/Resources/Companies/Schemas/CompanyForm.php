<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('tax')
                    ->required(),
                TextInput::make('tagline')
                    ->default(null),
                TextInput::make('director')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('bank')
                    ->required(),
                TextInput::make('number')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
