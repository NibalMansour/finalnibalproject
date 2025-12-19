<?php

namespace App\Filament\Resources\Students\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Students\StudentResource;

class ViewStudent extends ViewRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
            ->label("Back to List")
               ->url(StudentResource::getUrl('index'))
               ->color('success')
               ->icon('heroicon-o-arrow-left'),
        ];
    }
}
