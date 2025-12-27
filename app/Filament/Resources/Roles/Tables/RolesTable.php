<?php

namespace App\Filament\Resources\Roles\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use function Laravel\Prompts\text;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class RolesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("role_name")
                  ->label(app()->getLocale() === 'ar' ? ' اسم الدور' : 'Role Name')

                    ->searchable()
                    ->sortable(),
                    TextColumn::make("app_name")
                    
                    ->searchable()
                     ->label(app()->getLocale() === 'ar' ? ' اسم الواجهة' : 'Application Name')
                     
                    ->sortable(),
                    TextColumn::make("opp_name")
                     ->label(app()->getLocale() === 'ar' ? ' اسم العملية' : 'Operation Name')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                 EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
