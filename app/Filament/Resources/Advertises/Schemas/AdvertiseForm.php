<?php

namespace App\Filament\Resources\Advertises\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AdvertiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner_image')
                    ->image(),
                TextInput::make('banner_link')
                    ->default(null),
                Toggle::make('status')
                    ->required(),
                TextInput::make('company_name')
                    ->default(null),
            ]);
    }
}
