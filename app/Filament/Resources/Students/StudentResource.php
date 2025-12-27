<?php

namespace App\Filament\Resources\Students;

use BackedEnum;
use App\Models\Student;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use PhpParser\Node\Stmt\Label;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\Students\Pages\EditStudent;
use App\Filament\Resources\Students\Pages\ListStudents;
use App\Filament\Resources\Students\Pages\CreateStudent;
use App\Filament\Resources\Students\Schemas\StudentForm;
use App\Filament\Resources\Students\Tables\StudentsTable;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    

    protected static ?string $recordTitleAttribute = 'student';

    public static function form(Schema $schema): Schema
    {
        return StudentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        //return StudentsTable::configure($table);
        return $table
        ->columns([
            TextColumn::make("first_name")
                 ->label("الاسم")
               ->searchable()
               ->sortable(),
               TextColumn::make("last_name")
               ->label("الكنية")
               ->searchable()
               ->sortable(),
               TextColumn::make("father_name")
               ->label("الأب")
               ->searchable()
               ->sortable(),
               TextColumn::make("class")
               ->label("الصف")
               ->searchable()
               ->sortable(),
               TextColumn::make("email")
               ->label("البريد الالكتروني")
               ->searchable()
               ->sortable(),
               TextColumn::make("phon")
               ->label("رقم الهاتف")
               ->searchable()
               ->sortable(),
               TextColumn::make("adress")
               ->label("العنوان")
               ->searchable()
               ->sortable(),
               ImageColumn::make('photo') ->label('صورة الطالب') ->circular(), 
        ])
        ->recordActions([
                  ViewAction::make(),
                 EditAction::make(),
                DeleteAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
         return [
        \App\Filament\Resources\StudentResource\RelationManagers\GradesRelationManager::class,
    ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudents::route('/'),
            'create' => CreateStudent::route('/create'),
            'edit' => EditStudent::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
       

    return app()->getLocale() === 'ar' ? 'الطلاب' : 'Student';

    }

    public static function getPluralLabel(): string
    {
        return __('Students');
    }

    public static function getModelLabel(): string
    {
        return __('Student');
    }
}
