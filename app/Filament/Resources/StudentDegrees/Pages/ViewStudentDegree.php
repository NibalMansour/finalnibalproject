<?php

namespace App\Filament\Resources\StudentDegrees\Pages;

use App\Filament\Resources\StudentDegrees\StudentDegreeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudentDegree extends ViewRecord
{
    protected static string $resource = StudentDegreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->label("Back to List")
               ->url(StudentDegreeResource::getUrl('index'))
               ->color('success')
               ->icon('heroicon-o-arrow-left'),
        ];
    }
}
