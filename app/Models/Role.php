<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     
     public const OPPNAME = [ 0 => 'Create', 1 => 'Update', 2 => 'Delete', 3 => 'View', ]; 
     public const oppNameAr = [ 0 => 'إنشاء', 1 => 'تعديل', 2 => 'حذف', 3 => 'عرض', ];
     public const appName =[1 =>'Student Management',2 =>'Teacher Management',3 =>'Subject Management' , 4 => 'Degree Management', 5 =>  'User Management'];
     public const appNameAr = [1=> 'إدارة الطلاب',2=> ' إدارة المعلمين',3=> 'إدارة المواد',4 =>'إدارة الدرجات',5=> ' إدارة المستخدمين'];
     public function getOppLabelAttribute(): string {
          if (app()->getLocale() === 'ar') {
               return self::oppNameAr[$this->opp_name] ?? 'غير معروف'; 
              
          } 
          return self::OPPNAME[$this->opp_name] ?? 'غير معروف'; 
     }
     public function getAppLabelAttribute(): string {
          if (app()->getLocale() === 'ar') {
               return self::appNameAr[$this->app_name] ?? 'غير معروف'; 
          } 
          return self::appName[$this->app_name] ?? 'غير معروف'; 
     }
     protected $guarded = [''  ];
 public function users() { 
     return $this->belongsToMany(User::class, 'role_user', 'role_id','user_id' );
}
    
      
    
    
}


