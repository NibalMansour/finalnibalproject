<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Tables\Table;
use App\Models\StudentDegree;
use Filament\Widgets\TableWidget;
use function Laravel\Prompts\select;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;

use Illuminate\Database\Eloquent\Builder;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class StudentTableWidget extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        
        return $table
           
->query(Student::query())
        ->columns([
          //  TextColumn::make('first_name')->label('اسم الطالب '),
     TextColumn::make('first_name')
     ->label('الطالب ')
     
           
            ])

            ->filters([
        SelectFilter::make('first_name') 
        ->label(  app()->getLocale() === 'ar' ? '   اختر الطالب' : 'chose Student ')
        ->options( Student::pluck('first_name', 'first_name')->toArray() ),
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


