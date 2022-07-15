<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\HttpFoundation\RequestStack;

use function PHPSTORM_META\map;

class PengeluaranController extends Controller
{

    public function update(Request $request)
    {
    }

    public function destroy(Request $request)
    {
    }

    public function postPengeluaran(Request $request)
    {
        try {
            $validator = Validator::make($request->only(["kasir", "warehouse", "barang", "jml_pengeluaran", "foto_pengeluaran", "tgl_pengeluaran"]), [
                "kasir" => "required",
                "warehouse" => "required",
                "barang" => "required",
                "jml_pengeluaran" => "required",
                "foto_pengeluaran" => "image|mimes:jpeg,png,jpg",
                "tgl_pengeluaran" => "required"
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors()->first());
            }

            $image = $request->foto_pengeluaran;
            $image_names = "";
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move('images/pengeluaran', $imageName);
                $image_names = $imageName;
            } else {
                $image_names = 'zummXD2dvAtI.png';
            }

            $data_stored = Pengeluaran::create([
                "kasir" => $request->kasir,
                "warehouse" => $request->warehouse,
                "barang" => $request->barang,
                "jml_pengeluaran" => $request->jml_pengeluaran,
                "foto_pengeluaran" => $image_names,
                "tgl_pengeluaran" => $request->tgl_pengeluaran,
            ]);

            return response()->json([
                "body" => [
                    "message" => "Success storing pengeluaran detail"
                ],
                "data" => $data_stored
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

    public function getPengeluaran()
    {
        try {
            if (Auth::user()->role_id > 2 && config('staff_access') == 'own') {
                $data = Pengeluaran::select('pengeluaran.id', 'kasir', 'barang', 'jml_pengeluaran', 'foto_pengeluaran', 'billers.name as biller', 'warehouses.name as warehouse', DB::raw('DATE_FORMAT(pengeluaran.tgl_pengeluaran, "%d-%m-%Y") as tgl_pengeluaran'))
                ->join('warehouses', 'pengeluaran.warehouse', '=', 'warehouses.id')
                ->join('billers', 'pengeluaran.kasir', '=', 'billers.id')
                ->where('pengeluaran.warehouse', Auth::user()->warehouse_id)
                ->orderBy("tgl_pengeluaran", "DESC")
                ->get();
            } else {
                $data = Pengeluaran::select('pengeluaran.id', 'kasir', 'barang', 'jml_pengeluaran', 'foto_pengeluaran', 'billers.name as biller', 'warehouses.name as warehouse', DB::raw('DATE_FORMAT(pengeluaran.tgl_pengeluaran, "%d-%m-%Y") as tgl_pengeluaran'))
                ->join('warehouses', 'pengeluaran.warehouse', '=', 'warehouses.id')
                ->join('billers', 'pengeluaran.kasir', '=', 'billers.id')
                ->orderBy("tgl_pengeluaran", "DESC")
                ->get();
            }
            $data->map(function ($data) {
                return [
                    'id' => $data->id,
                    'kasir' => $data->biller,
                    'warehouse' => $data->warehouse,
                    'barang' => $data->barang,
                    'jml_pengeluaran' => $data->jml_pengeluaran,
                    'foto_pengeluaran' => $data->foto_pengeluaran,
                    'tgl_pengeluaran' => $data->tgl_pengeluaran,
                ];
            });

            return response()->json([
                "body" => [
                    "message" => "Get detail pengeluaran"
                ],
                "data" => $data
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
