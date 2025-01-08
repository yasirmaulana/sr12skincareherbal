<?php

namespace App\Filament\Resources\SkincareResource\Pages;

use App\Filament\Resources\SkincareResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkincare extends EditRecord
{
    protected static string $resource = SkincareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
