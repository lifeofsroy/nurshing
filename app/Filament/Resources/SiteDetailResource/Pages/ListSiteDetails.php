<?php

namespace App\Filament\Resources\SiteDetailResource\Pages;

use App\Filament\Resources\SiteDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteDetails extends ListRecords
{
    protected static string $resource = SiteDetailResource::class;

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
