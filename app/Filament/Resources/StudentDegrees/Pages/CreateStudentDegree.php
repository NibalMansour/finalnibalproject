<?php

namespace App\Filament\Resources\StudentDegrees\Pages;

use App\Filament\Resources\StudentDegrees\StudentDegreeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentDegree extends CreateRecord
{
    protected static string $resource = StudentDegreeResource::class;
    protected static  bool $canCreateAnother = false;
       protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
public function getTitle(): string { 
    return (app()->getLocale() === 'ar' ? ' اضافة الدرجات' : 'create Degree'); 
    }
}
