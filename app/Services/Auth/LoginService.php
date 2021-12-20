<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginService
{
    /**
     * @throws Exception
     */
    public function run(array $data = []): string
    {
        if (! Auth::attempt($data)){
            throw new Exception('Credenciais Inválidas');
        }
        $user = User::where('email', Arr::get($data, 'email'));
        $token = $user->createToken($user->name);
        return $token->plainTextToken;
    }
}
