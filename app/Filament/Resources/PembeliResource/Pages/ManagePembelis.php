<?php

namespace App\Filament\Resources\PembeliResource\Pages;

use App\Filament\Resources\PembeliResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePembelis extends ManageRecords
{
    protected static string $resource = PembeliResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
