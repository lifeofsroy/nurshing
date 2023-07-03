<?php

namespace App\Filament\Resources\PrinciDeskResource\Pages;

use App\Filament\Resources\PrinciDeskResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrinciDesk extends EditRecord
{
    protected static string $resource = PrinciDeskResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
