<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Specialtactics\L5Api\Http\Controllers\Features\JWTAuthenticationTrait;
use Specialtactics\L5Api\Http\Response\Format\Json;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class AuthController extends Controller
{
    use JWTAuthenticationTrait;
    public function token(Request $request)
    {
        //$request.params.admin == 'admin@admin.com' && $request.params.password == 'Password'
        if(false) {
            $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
            return json_encode($age);
        }else{
            $input = $request->all();
            return $input;
        }

    }
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
}
