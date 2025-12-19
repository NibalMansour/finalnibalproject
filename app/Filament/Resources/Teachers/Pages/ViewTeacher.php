<?php

namespace App\Filament\Resources\Teachers\Pages;

use Filament\Actions\Action;
use Filament\Actions\EditAction;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Teachers\TeacherResource;

class ViewTeacher extends ViewRecord
{
    protected static string $resource = TeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // EditAction::make(),
           Action::make("back")
               ->label("Back to List")
               ->url(TeacherResource::getUrl('index'))
               ->color('success')
               ->icon('heroicon-o-arrow-left'),
        ];
    }
}
