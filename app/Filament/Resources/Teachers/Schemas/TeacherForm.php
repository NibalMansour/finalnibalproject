<?php

namespace App\Filament\Resources\Teachers\Schemas;

use App\Models\Teacher;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Select;
class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("first_name")
                  ->label(app()->getLocale() === 'ar' ? ' الاسم' : 'First Name '),
                           
               TextInput::make("last_name")
                ->label(app()->getLocale() === 'ar' ? 'الكنية' : 'Last Name'),
               TextInput::make("father_name")
                  ->label(app()->getLocale() === 'ar' ? 'الأب' : 'Father Name')         ,
               TextInput::make("class")
                  ->label(app()->getLocale() === 'ar' ? 'الصف' : 'Class'),
               TextInput::make("email")
                   ->label(app()->getLocale() === 'ar' ? 'البريد الالكتروني' : ' Email')         ,
               TextInput::make("phon")
                      ->label(app()->getLocale() === 'ar' ? 'رقم الهاتف' : 'Phone ')       ,
               TextInput::make("adress")
                         ->label(app()->getLocale() === 'ar' ? 'العنوان' : 'Adress')   ,
                          
               // TextInput::make("subject.subjectname")
                 //   ->label('المادة')
                 //   ->disabled(),
                   select::make('subject_id')
                   ->label(app()->getLocale() === 'ar' ? 'المادة' : 'Subject')
                    ->relationship('subject',  'subjectname')
                    ->required()               
            ]);
    }
}
