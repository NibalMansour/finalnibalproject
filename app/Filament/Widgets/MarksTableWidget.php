<?php

namespace App\Filament\Widgets;

use Filament\Tables\Table;
use App\Models\StudentDegree;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class MarksTableWidget extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        
        return $table
           
->query(StudentDegree::query())
        ->columns([
            TextColumn::make('degree')->label('العلامة '),
           // TextColumn::make('subject_id')->label('المادة'),
            TextColumn::make('subject.subjectname')->label('المادة'),
            ])

            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
    
}


