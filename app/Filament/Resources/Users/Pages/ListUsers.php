<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
    public static function getNavigationLabel(): string
    {
        return app()->getLocale() === 'ar' ?'إدارة المستخدمين' :'Users Management';
    }

    // عنوان الصفحة
    public function getTitle(): string
    {
        return app()->getLocale() === 'ar' ?'إدارة المستخدمين' :'Users Management';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}


  

    