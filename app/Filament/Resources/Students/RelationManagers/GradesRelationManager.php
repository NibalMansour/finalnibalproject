<?php


namespace App\Filament\Resources\StudentResource\RelationManagers;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\RelationManagers\RelationManager;

class GradesRelationManager extends RelationManager
{
    protected static string $relationship = 'StudentDegree';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject.subjectname')
                 ->label(app()->getLocale() === 'ar' ? 'اسم المادة ' : 'Subject Name ')      ,
                TextColumn::make('degree')->label('العلامة')
                 ->label(app()->getLocale() === 'ar' ? ' العلامة ' : 'Degree ')      ,
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
