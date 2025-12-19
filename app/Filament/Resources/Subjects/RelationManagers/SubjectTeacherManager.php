<?php


namespace App\Filament\Resources\StudentResource\RelationManagers;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\RelationManagers\RelationManager;

class SubjectTeacherManager extends RelationManager
{
    protected static string $relationship = 'teacher';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                 ->label(app()->getLocale() === 'ar' ? 'اسم المدرس ' : 'Teacher Name ')      ,
                
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
