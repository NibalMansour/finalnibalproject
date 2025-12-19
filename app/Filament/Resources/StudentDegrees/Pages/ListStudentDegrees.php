<?php

namespace App\Filament\Resources\StudentDegrees\Pages;

use App\Filament\Resources\StudentDegrees\StudentDegreeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudentDegrees extends ListRecords
{
    protected static string $resource = StudentDegreeResource::class;
protected static ?string $title = 'Degree';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
