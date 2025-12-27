<?php

namespace App\Filament\Resources\Roles\Pages;

use App\Filament\Resources\Roles\RoleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

public static function getNavigationLabel(): string
    {
        return app()->getLocale() === 'ar' ?'إدارة الأدوار' :'Roles Management';
    }

    // عنوان الصفحة
    public function getTitle(): string
    {
        return app()->getLocale() === 'ar' ?'إدارة الأدوار' :'Roles Management';
    }
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    
}
