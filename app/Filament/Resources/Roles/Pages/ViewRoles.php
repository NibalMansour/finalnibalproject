<?php

namespace App\Filament\Resources\Roles\Pages;

use App\Filament\Resources\Roles\RoleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRoles extends ViewRecord
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            EditAction::make('backToList')
                ->label("Back to List")
                ->url(RoleResource::getUrl('index'))
                ->color('success')
                ->icon('heroicon-o-arrow-left'),
        ];
    }
    
}
