<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use function Laravel\Prompts\text;
use Filament\Actions\BulkActionGroup;

use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            //     TextColumn::make("name")
            //     ->label("الاسم")
            //    ->searchable()
            //    ->sortable(),
            //     TextColumn::make("email")
            //     ->label("البريد الالكتروني")
            //    ->searchable()
            //    ->sortable(),
            //     TextColumn::make("password")
            //     ->label("كلمة السر")
            //    ->searchable()
            //    ->sortable(),
            //     TextColumn::make("role")
            //     ->label("السماحية")
            //    ->searchable()
            //    ->sortable(),
                      TextColumn::make('name')
                        ->label(app()->getLocale() === 'ar' ? 'اسم المستخدم' : 'User Name')
                      ->sortable()->searchable(),
                TextColumn::make('email')
                  ->label(app()->getLocale() === 'ar' ? 'البريد الالكتروني' : 'Email')
                ->sortable()->searchable(),
                TextColumn::make('role')
                  ->label(app()->getLocale() === 'ar' ? 'السماحية' : 'Role')
                  ->sortable(),
                TextColumn::make('created_at')->dateTime()
                  ->label(app()->getLocale() === 'ar' ? 'أنشىء في' : 'Created at'),
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
