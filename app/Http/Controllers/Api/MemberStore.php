<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class MemberStore extends Controller
{
    private $bearer = "";
    private $token = "abatsyajkas29873jans-AAA";
    public function __construct(Request $request)
    {
        $this->bearer = hash('sha512', $request->name . $request->email . $request->phone . $this->token);
    }
    public function storeUser(Request $request)
    {
        $this->validate($request,[
            'email'=>'unique:users',
            'phone' => 'unique:users'
        ]);
        try {
            $request->bearerToken();
            if ($this->bearer == $request->bearerToken()) {
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'is_active' => true,
                    'role_id' => 4,
                    'is_deleted' => false,
                    'password' => $request->password
                ]);
                return response()->json([
                    'status' => true,
                    'body' => [
                        'message' => 'success'
                    ]
                ], 201);
            } else {
                return response()->json([
                    'status' => false,
                    'body' => [
                        'message' => 'You can\'t access this api!',
                        $request->bearerToken()
                    ]
                ], 401);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }
}
