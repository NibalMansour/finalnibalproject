<?php

namespace App\Filament\Resources\Users\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RolesRelationManager extends RelationManager
{
    protected static string $relationship = 'roles';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([ TextInput::make('role_name') 
            ->label('اسم الدور') 
            ->required(), ]);
    }

    public function table(Table $table): Table
    {
        
        return $table
           ->columns([ TextColumn::make('role_name') 
           ->label('اسم الدور') ->badge(), 
           ]) 
           ->headerActions([CreateAction::make(), 
    ])
           ->actions([ 
            EditAction::make(),
            ViewAction::make() ,
           DeleteAction::make(), ]) 
           ->bulkActions([ 
            DeleteBulkAction::make(), 
        ])
            ->filters([
                //
            ]);
           
            }
    }



