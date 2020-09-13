<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistroRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(CreateRegistroRequest $request)
    {
        //
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        User::create($input);
        $user = User::whereEmail($request->email)->first();
        $token = $user->createToken('marcas')->accessToken;
        return response()->json([
            'res' => true,
            'mensaje' => 'Usuario Creado Correctamente',
            'token' => $token,
        ], 200);
    }

    public function login(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if (!is_null($user) && Hash::check($request->password, $user->password)) {

            $token = $user->createToken('marcas')->accessToken;

            return response()->json([
                'res' => true,
                'token' => $token,
                'mensaje' => 'Loggin correcto'
            ], 200);
        } else {
            return response()->json([
                'res' => false,
                'mensaje' => 'Usuario o Email Incorrecto'
            ], 415);
        }
    }


    public function logout(Request $request)
    {
        $user = auth()->user();

        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });
        // $user->save();

        return response()->json([
            'res' => false,
            'mensaje' => 'Adios'
        ], 415);
    }
}
