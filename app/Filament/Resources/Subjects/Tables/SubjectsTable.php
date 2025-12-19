<?php

namespace App\Filament\Resources\Subjects\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class SubjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("subjectname")
              ->label(app()->getLocale() === 'ar' ? 'اسم المادة ' : 'Subject Name ')
                ->sortable()
                ->searchable()
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
