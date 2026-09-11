<?php

namespace App\Filament\Resources\Advertises\Schemas;

use Filament\Forms\Components\DatePicker;
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
                TextInput::make('company_name')
                    ->default(null),
                TextInput::make('banner_link')
                    ->default(null),
                FileUpload::make('banner_image')
                    ->image()
                    ->columnSpanFull(),
                DatePicker::make('expiry_date')
                    ->label('Expiry Date')
                    ->nullable(),

            ]);
    }
}
