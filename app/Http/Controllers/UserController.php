<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public static $model = User::class;

    public function getAll(){
        $users = User::all();

        if($users) {
            return response()->success('İşlem başarıyla gerçekleşti.', json_decode($users));
        } else {
            return response()->error('Your custom error message', 'Validation errors or else');
        }
    }
}
