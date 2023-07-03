<?php

namespace App\Filament\Resources\EligibilityResource\Pages;

use App\Filament\Resources\EligibilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEligibilities extends ListRecords
{
    protected static string $resource = EligibilityResource::class;

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
