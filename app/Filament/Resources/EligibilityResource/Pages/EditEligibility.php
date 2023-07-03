<?php

namespace App\Filament\Resources\EligibilityResource\Pages;

use App\Filament\Resources\EligibilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEligibility extends EditRecord
{
    protected static string $resource = EligibilityResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
