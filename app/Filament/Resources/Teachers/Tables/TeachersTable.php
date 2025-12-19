<?php

namespace App\Filament\Resources\Teachers\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;

class TeachersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("first_name")
 ->label(app()->getLocale() === 'ar' ? ' الاسم' : 'First Name ')
               ->searchable()
               ->sortable(),
               TextColumn::make("last_name")
               ->label(app()->getLocale() === 'ar' ? 'الكنية' : 'Last Name')
               ->searchable()
               ->sortable(),
               TextColumn::make("father_name")
     ->label(app()->getLocale() === 'ar' ? 'الأب' : 'Father Name')         
               ->searchable()
               ->sortable(),
               TextColumn::make("class")
 ->label(app()->getLocale() === 'ar' ? 'الصف' : 'Class')
               ->searchable()
               ->sortable(),
               TextColumn::make("email")
               ->label(app()->getLocale() === 'ar' ? 'البريد الالكتروني' : ' Email')         
               ->searchable()
               ->sortable(),
               TextColumn::make("phon")
                      ->label(app()->getLocale() === 'ar' ? 'رقم الهاتف' : 'Phone ')       
               ->searchable()
               ->sortable(),
               TextColumn::make("adress")
                   ->label(app()->getLocale() === 'ar' ? 'العنوان' : 'Adress')   
               ->searchable()
               ->sortable(),
               TextColumn::make("subject.subjectname")
                 ->label(app()->getLocale() === 'ar' ? 'المادة' : 'Subject')
               ->searchable()
               ->sortable()
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
