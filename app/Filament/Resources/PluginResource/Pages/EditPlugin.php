<?php

namespace App\Filament\Resources\PluginResource\Pages;

use App\Filament\Resources\PluginResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlugin extends EditRecord
{
    protected static string $resource = PluginResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
