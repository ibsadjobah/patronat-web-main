<?php

namespace App\Filament\Resources\JuridiqueResource\Pages;

use App\Filament\Resources\JuridiqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJuridique extends EditRecord
{
    protected static string $resource = JuridiqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
