<?php

namespace App\Policies;

use App;
use App\Models\Student;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;

class StudentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Student $student): bool
    {
        return true; 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //return $user->role >= 1; 
        //return $role->user == " إدارة الطلاب ";
        $role = $user->roles() ->where('role_name','=','1 - 2')
                              
                               ->first();
         $role1  = $user->role >= 1;
        if ($role || $role1) {
            return true;}
            return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Student $student): bool
    {
        
      return $user->role >= 1; 
      
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Student $student): bool
    {
       return $user->role >= 1; 
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Student $student): bool
    {
        return $user->role >= 1; 
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Student $student): bool
    {
        return $user->role >= 1; 
    }
}
