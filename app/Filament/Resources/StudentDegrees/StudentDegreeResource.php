<?php

namespace App\Filament\Resources\StudentDegrees;

use App\Filament\Resources\StudentDegrees\Pages\CreateStudentDegree;
use App\Filament\Resources\StudentDegrees\Pages\EditStudentDegree;
use App\Filament\Resources\StudentDegrees\Pages\ListStudentDegrees;
use App\Filament\Resources\StudentDegrees\Schemas\StudentDegreeForm;
use App\Filament\Resources\StudentDegrees\Tables\StudentDegreesTable;
use App\Models\StudentDegree;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudentDegreeResource extends Resource
{
    protected static ?string $model = StudentDegree::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookmarkSlash;

    protected static ?string $recordTitleAttribute = 'degree';

    public static function form(Schema $schema): Schema
    {
        return StudentDegreeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentDegreesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudentDegrees::route('/'),
            'create' => CreateStudentDegree::route('/create'),
            'edit' => EditStudentDegree::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
       

    return app()->getLocale() === 'ar' ? 'علامات الطلاب' : 'StudentDegree';

    }

}
