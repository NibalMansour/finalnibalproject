<?php

namespace App\Filament\Resources\StudentDegrees\Pages;

use App\Filament\Resources\StudentDegrees\StudentDegreeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudentDegree extends EditRecord
{
    protected static string $resource = StudentDegreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
