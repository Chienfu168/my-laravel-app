<?php

namespace App\Filament\Resources\PettyCashResource\Pages;

use App\Filament\Resources\PettyCashResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPettyCash extends EditRecord
{
    protected static string $resource = PettyCashResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
