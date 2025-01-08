<?php

namespace App\Filament\Resources\SkincareResource\Pages;

use App\Filament\Resources\SkincareResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkincares extends ListRecords
{
    protected static string $resource = SkincareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
