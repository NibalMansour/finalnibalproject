<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;
     protected static  bool $canCreateAnother = false;
    
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
public function getTitle(): string { 
    return (app()->getLocale() === 'ar' ? ' اضافة طالب' : 'create student'); 
    }
}
