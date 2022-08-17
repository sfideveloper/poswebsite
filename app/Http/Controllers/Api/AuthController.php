<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors()->first());
            } else {
                if (!Auth::attempt($request->only('name', 'password'))) {
                    return response()->json(['message' => 'Unauthorized'], 401);
                }

                $user = User::where('name', $request['name'])->firstOrFail();

                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json(['message' => 'Hi ' . $user->name . ', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer',]);
                return response()->json([
                    
                        'message' => 'Hi ' . $user->name . ', welcome to home',
                        'access_token' => $token,
                        'token_type' => 'Bearer'
                    ],
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ],
                'login' => false,
                'data' => '',
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255|unique:users',
                'email' => 'required|string|email|max:255',
                'phone' => 'required',
                'company_name' => 'string',
                'role_id' => 'required|integer|exists:roles,id',
                'biller_id' => 'integer|exists:billers,id',
                'warehouse_id' => 'integer|exists:warehouses,id',
                'password' => 'required|string|min:8'
            ]);
            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors()->first());
            } else {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'company_name' => $request->company_name,
                    'role_id' => $request->role_id,
                    'biller_id' => $request->biller_id,
                    'warehouse_id' => $request->warehouse_id,
                    'is_active' => true,
                    'is_deleted' => false,
                    'password' => Hash::make($request->password),
                ]);

                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'body' => [
                        'data' => $user,
                        'access_token' => $token,
                        'token_type' => 'Bearer'
                    ],
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
