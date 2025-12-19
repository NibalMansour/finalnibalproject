<?php

namespace App\Filament\Widgets;
use Filament\Schemas\Schema;
use App\Models\Student;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use function Laravel\Prompts\select;

class StudentsTableWidget extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
        public function table(Table $table): Table
    {
        return $table
           
        ->query(Student::query())
           ->columns([
            
                   
            TextColumn::make('first_name')->label('اسم الطالب')
            
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
