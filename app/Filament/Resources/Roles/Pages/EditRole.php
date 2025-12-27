<?php

namespace App\Filament\Resources\Roles\Pages;

use App\Filament\Resources\Roles\RoleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;
    protected function getRedirectUrl(): ?string
    {
        return parent::getRedirectUrl();
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    public function getTitle(): string { 
    return (app()->getLocale() === 'ar' ? ' تعديل الدور' : 'update Role'); 
    }
}
