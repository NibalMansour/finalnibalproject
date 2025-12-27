<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;


class StudentGradesDashboard extends Page
{
    protected string $view = 'filament.pages.student-grades-dashboard';
    protected function getHeaderWidgets(): array
{
    return [
        \App\Filament\Widgets\StudentTableWidget::class,
    ];
}

protected function getFooterWidgets(): array
{
    return [
        \App\Filament\Widgets\MarksTableWidget::class,
    ];
}
public static function getNavigationLabel(): string
    {
       

    return app()->getLocale() === 'ar' ? ' الطلاب والدرجات كاملة' : 'All Student Degree';

    }
    public function getTitle(): string
    {
        return app()->getLocale() === 'ar' ? 'جميع الطلاب والدرجات' : 'All Students and degree';
    }
    
}




