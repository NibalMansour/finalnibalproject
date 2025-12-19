<?php

namespace App\Filament\Resources\StudentDegrees\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use function Laravel\Prompts\text;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class StudentDegreesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //TextColumn::make("student_id")
              //  ->sortable()
               // ->searchable(),
               TextColumn::make('Student.first_name')
                 ->label('اسم الطالب'),
                 TextColumn::make("subject.subjectname")
                 ->label("اسم المادة"),
                
                 TextColumn::make("succuss")
                     ->label('النتيجة')
                     ->formatStateUsing(fn ($state) => $state == 1 ? 'ناجح' : 'راسب')
                    ->color(fn ($state) => $state == 1 ? 'success' : 'danger')

                 
                ->sortable()
                ->searchable(),
                 TextColumn::make("degree")
                 ->label("العلامة")
                ->sortable()
                ->searchable(),
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

 