<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

use function Laravel\Prompts\text;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make("first_name")
               
                 
               ->searchable()
               ->sortable(),
               TextColumn::make("last_name")
              
               ->searchable()
               ->sortable(),
               TextColumn::make("father_name")
               
               ->searchable()
               ->sortable(),
               TextColumn::make("class")
              
               ->searchable()
               ->sortable(),
               TextColumn::make("email")
              
               ->searchable()
               ->sortable(),
               TextColumn::make("phon")
              
               ->searchable()
               ->sortable(),
               TextColumn::make("adress")
              
               ->searchable()
               ->sortable(),
               textColumn::make("img_url")
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
