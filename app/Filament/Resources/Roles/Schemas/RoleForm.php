<?php

namespace App\Filament\Resources\Roles\Schemas;


use App\Models\Role;


use App\Models\Student;
use Filament\Schemas\Schema;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
             
           Select::make('role_name') 
              ->label(app()->getLocale() === 'ar' ? ' اسم الدور' : 'Role Name')
              
              ->options([
                 '0 - 0'=> app()->getLocale() === 'ar'? 'كامل': 'All',
                  '1 - 1'=> app()->getLocale() === 'ar'? 'اضافة ادوار':'add roles',
                  '2 - 1'=> app()->getLocale() === 'ar'? 'تعديل ادوار':'update roles',
                  '3 - 1'=> app()->getLocale() === 'ar'? 'حذف ادوار':'delete roles',
                  '4 - 1'=> app()->getLocale() === 'ar'? 'عرض ادوار':'view roles',

                  '1 - 2'=> app()->getLocale() === 'ar'? 'اضافة طلاب':'add student',
                  '2 - 2'=> app()->getLocale() === 'ar'? 'تعديل طلاب':'update student',
                  '3 - 2'=> app()->getLocale() === 'ar'? 'حذف طلاب':'delete student',
                 '4 - 2'=> app()->getLocale() === 'ar'? 'عرض طلاب':'view student',

                '1 - 3'=> app()->getLocale() === 'ar'? 'اضافة مدرسين':'add teacher',
                '2 - 3'=> app()->getLocale() === 'ar'? 'تعديل مدرسين':'update teacher',
                '3 - 3'=> app()->getLocale() === 'ar'? 'حذف مدرسين':'delete teacher',
                '4 - 3'=> app()->getLocale() === 'ar'? 'عرض مدرسين':'view teacher',

                '1 - 4'=> app()->getLocale() === 'ar'? 'اضافة المواد':'add Subject',
                '2 - 4'=> app()->getLocale() === 'ar'? 'تعديل المواد':'update Subject',
                '3 - 4'=> app()->getLocale() === 'ar'? 'حذف المواد':'delete Subject',
                '4 - 4'=> app()->getLocale() === 'ar'? 'عرض المواد':'view Subject',

                '1 - 5'=> app()->getLocale() === 'ar'? 'اضافة الدرجات':'add Degree',
                '2 - 5'=> app()->getLocale() === 'ar'? 'تعديل الدرجات':'update Degree',
                '3 - 5'=> app()->getLocale() === 'ar'? 'حذف الدرجات':'delete Degree',
                '4 - 5'=> app()->getLocale() === 'ar'? 'عرض الدرجات':'view Degree',

                '1 - 6'=> app()->getLocale() === 'ar'? 'اضافة المستخدمين':'add User',
                '2 - 6'=> app()->getLocale() === 'ar'? 'تعديل المستخدمين':'update User',
                '3 - 6'=> app()->getLocale() === 'ar'? 'حذف المستخدمين':'delete User',
                '4 - 6'=> app()->getLocale() === 'ar'? 'عرض المستخدمين':'view User',
              ])
             ->afterStateUpdated(function ($state, callable $set, $get) { $set('role_name', $get('opp_name') . ' - ' . $get('app_name')); })
             ->required()
             ->searchable(),    
                    
          Select::make('opp_name')
          ->options([
            '0' => app()->getLocale() === 'ar' ? ' كامل' : 'All',
            '1'=> app()->getLocale() === 'ar'? 'اضافة': 'create',
            '2' => app()->getLocale() === 'ar' ? ' تعديل' : 'Update',
            '3' => app()->getLocale() === 'ar' ? ' حذف' : 'Delete',
            '4' => app()->getLocale() === 'ar' ? ' عرض' : 'View',

          ])
          ->label(app()->getLocale() === 'ar' ? ' اسم العملية' : 'Operation Name'),
           Select::make('app_name')
          ->options([
            '0' => app()->getLocale() === 'ar'? 'كامل': 'All',
            '1'=> app()->getLocale() ===  'ar' ? ' إدارة الأدوار' : 'Role Management', 
            '2' => app()->getLocale() === 'ar' ? ' إدارة الطلاب' : 'Student Management',
            '3' => app()->getLocale() === 'ar' ? ' إدارة المدرسين' : 'Teacher Management',
            '4' => app()->getLocale() === 'ar' ? ' إدارة المواد' : 'Subject Management',
            '5'=> app()->getLocale() === 'ar' ? ' إدارة الدرجات' : 'Degree Management',
            '6'=> app()->getLocale() === 'ar' ? ' إدارة المستخدمين' : 'User Management',
          ])
         ->label(app()->getLocale() === 'ar' ? ' اسم الواجهة' : 'Application Name'),

//  TextInput::make("role_name")
//                   ->label(app()->getLocale() === 'ar' ? ' اسم الدور' : 'Role Name')
//                 ->required()
//                  ->afterStateUpdated(function ($state, callable $set, $get) { $set('role_name', $get('app_name') . ' - ' . $get('opp_name')); })
//                    ->maxLength(255),
              
            ]);
    }
}
