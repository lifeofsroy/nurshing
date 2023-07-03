<?php

namespace App\Filament\Resources\PrinciDeskResource\Pages;

use App\Filament\Resources\PrinciDeskResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrinciDesks extends ListRecords
{
    protected static string $resource = PrinciDeskResource::class;

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
