<?php

namespace App\Filament\Resources\JuridiqueResource\Pages;

use App\Filament\Resources\JuridiqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJuridiques extends ListRecords
{
    protected static string $resource = JuridiqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
