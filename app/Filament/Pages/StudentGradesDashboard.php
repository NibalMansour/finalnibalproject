<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class StudentGradesDashboard extends Page
{
    protected string $view = 'filament.pages.student-grades-dashboard';
    protected function getHeaderWidgets(): array
{
    return [
        \App\Filament\Widgets\StudentsTableWidget::class,
    ];
}

protected function getFooterWidgets(): array
{
    return [
        \App\Filament\Widgets\MarksTableWidget::class,
    ];
}
}




