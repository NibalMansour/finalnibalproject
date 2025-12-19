<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    // اسم القائمة الجانبية
    public static function getNavigationLabel(): string
    {
        return app()->getLocale() === 'ar' ? 'جميع الطلاب' : 'All Students';
    }

    // عنوان الصفحة
    public function getTitle(): string
    {
        return app()->getLocale() === 'ar' ? 'جميع الطلاب' : 'All Students';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
