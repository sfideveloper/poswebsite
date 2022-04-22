<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Wifi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class WifiController extends Controller
{

    public function updateWifi(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required', 
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors());
            }

            $data_updated = Wifi::find($request->id);
            $data_updated->ssid = $request->ssid;
            $data_updated->password = $request->password;
            $data_updated->save(); 

            return response()->json([
                'body' => [
                    'message' => 'Data updated succesfully',
                    
                ],
                'data' => $data_updated
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }

    public function destroyWifi(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors());
            }

            $data_deleted = Wifi::find($request->id)->delete();

            return response()->json([
                'body' => [
                    'message' => 'Data deleted succesfully'
                ]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }

    public function readwifi()
    {
        try {
            $data_wifi = Wifi::get();
            return response()->json([
                'body' => [
                    'message' => 'Get Wifi Detail'
                ],
                'data' => $data_wifi
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }

    public function storeWifi(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'ssid' => 'required',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors());
            }

            $data_stored = Wifi::create([
                'ssid' => $request->ssid,
                'password' => $request->password
            ]);

            return response()->json([
                'body' => [
                    'message' => 'Success storing wifi detail'
                ],
                'data' => $data_stored
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'body' => [
                    'message' => 'Opps, something gone wrong',
                    'dev' => $th->getMessage()
                ]
            ], 500);
        }
    }
}
