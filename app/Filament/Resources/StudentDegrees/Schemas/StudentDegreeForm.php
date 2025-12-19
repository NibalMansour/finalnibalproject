<?php

namespace App\Filament\Resources\StudentDegrees\Schemas;

use Filament\Schemas\Schema;
use function Laravel\Prompts\text;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CheckboxList;

class StudentDegreeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 //TextInput::make("student_id")
                            //->label("Studen Name")
                select::make('student_id')
                   ->relationship('student',  'first_name')
                   ->required()        
                            ,
               //TextInput::make("subject_id")
                           // ->label("subject Name")
                    select::make('subject_id')
                   ->relationship('subject',  'subjectname')
                   ->required()        
                           ,
              TextInput::make("degree")
                            ->label("degree")
                            ->required()
                           ,
               TextInput::make("succuss")
                            ->label("succuss")
                            ->required()  
                                     
                         ]);
                          



    }
}

