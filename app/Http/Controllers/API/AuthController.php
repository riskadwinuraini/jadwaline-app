<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            $respon = [
                "status"    => "error",
                "message"   => "Validation Error",
                "errors"    => $validator->errors(),
                "content"   => null
            ];

            return response()->json(
                $respon, 400
            );       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $respon = [
            "status"    => "success",
            "message"   => "Successfully Registered",
            "error"     => null,
            "content"   => [
                    "code"          => 201,
                    "access_token"  => $token,
                    "token_type"    => "Bearer"
            ]
        ];
        return response()
            ->json(
                $respon, 201
            );
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {

            $respon = [
                "status"    => "Unauthorized",
                "message"   => "Durung Login",
                "error"     => 401,
                "content"   => null
            ];

            return response()
                ->json(
                    $respon,
                401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        $respon = [
            "status"    => "success",
            "message"   => "Hi '.$user->name.', welcome to home",
            "error"     => null,
            "content"   => [
                    "code"          => 200,
                    "access_token"  => $token,
                    "token_type"    => "Bearer"
            ]
        ];

        return response()
            ->json(
                $respon, 200
            );
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();


        $respon = [
            "status"    => "success",
            "message"   => "You have successfully logged out and the token was successfully deleted",
            "error"     => null,
        ];

        return response()
        ->json(
            $respon, 200
        );
    }
}