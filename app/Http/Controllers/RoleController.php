<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public static $model = Role::class;
    public function getAll()
    {
        $roles  = Role::getAll();
        if($roles){
            return response()->success('İşlem başarıyla gerçekleşti',json_decode($roles));
        }else{
            return  response()->error('İşlem sırasında bir hata oluştu','Validation Error');
        }
    }

}
