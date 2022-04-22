<?php

namespace App\Http\Controllers\Api;

use App\Biller;
use App\Brand;
use App\CashRegister;
use App\Category;
use App\Coupon;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_Sale;
use App\Product_Warehouse;
use App\ProductVariant;
use App\Sale;
use App\Tax;
use App\Unit;
use App\Variant;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class PosController extends Controller
{
    public function getWarehouse()
    {
        try {
            $lims_warehouse_list = Warehouse::where('is_active', true)->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Warehouse Active'
                ],
                'data' => $lims_warehouse_list
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

    public function getBiller()
    {
        try {
            $lims_biller_list = Biller::where('is_active', true)->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Biller Active'
                ],
                'data' => $lims_biller_list
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

    public function getTax()
    {
        try {
            $lims_tax_list = Tax::where('is_active', true)->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Tax Active'
                ],
                'data' => $lims_tax_list
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

    public function getProduct()
    {
        try {
            $lims_product_list = Product::join('categories', 'categories.id', '=', 'products.category_id')
                ->leftJoin('taxes', 'taxes.id', '=', 'products.tax_id')
                ->leftJoin('units', 'units.id', '=', 'products.unit_id')
                ->select('products.id', 'products.name as nama', 'products.code', 'categories.name as jenis', 'products.price as harga', 'products.image as foto', 'taxes.rate as diskon_item', 'products.qty as stok', 'units.unit_name as satuan', 'products.product_details as resep')
                ->where('products.is_active', true)
                ->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Product Active'
                ],
                'data' => $lims_product_list
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

    public function getBrand()
    {
        try {
            $lims_brand_list = Brand::where('is_active', true)->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Brand Active'
                ],
                'data' => $lims_brand_list
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

    public function getCategory()
    {
        try {
            $lims_category_list = Category::where('is_active', true)->select('id', 'name as nama', 'image as foto')->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Category Active'
                ],
                'data' => $lims_category_list
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

    public function getCoupon()
    {
        try {
            $lims_coupon_list = Coupon::where('is_active', true)->get();
            return response()->json([
                'body' => [
                    'message' => 'Get List Coupon Active'
                ],
                'data' => $lims_coupon_list
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

    public function postPos(Request $request)
    {
        //Coupon Discount validasi belum
        $data = $request->only([
            'user_id',
            'pos',
            'draft',
            'customer_id',
            'customer_name',
            'warehouse_id',
            'biller_id',
            'item',
            'product_id',
            'product_code',
            'qty',
            'sale_unit',
            'net_unit_price',
            'discount',
            'tax_rate',
            'tax',
            'subtotal',
            'total_qty',
            'total_discount',
            'total_tax',
            'total_price',
            'order_tax',
            'grand_total',
            'sale_status',
            'coupon_active',
            'coupon_id',
            'coupon_discount',
            'paying_amount',
            'paying_amount_no_tax',
            'paid_amount',
            'paid_amount_no_tax',
            'paid_by_id',
            'order_discount',
            'order_tax_rate',
            'shipping_cost',
        ]);

        try {
            $validator = Validator::make($data, [
                'user_id' => [
                    'required',
                    'integer',
                    'exists:users,id'
                ],
                'pos' => [
                    'integer',
                    'min:0',
                    'max:1',
                ],
                'draft' => [
                    'integer',
                    'min:0',
                    'max:1',
                ],
                'customer_id' => [
                    'required',
                    'integer',
                ],
                'customer_name' => [
                    'required',
                    'string',
                ],
                'warehouse_id' => [
                    'required',
                    'integer',
                    'exists:warehouses,id',
                ],
                'biller_id' => [
                    'required',
                    'integer',
                    'exists:billers,id',
                ],
                'item' => [
                    'required',
                    'integer',
                ],
                'total_qty' => [
                    'required',
                    'integer',
                ],
                'total_discount' => [
                    'integer',
                ],
                'total_tax' => [
                    'integer',
                ],
                'coupon_active' => [
                    'integer',
                    'nullable',
                    'min:0',
                    'max:1',
                ],
                'coupon_discount' => [
                    'integer',
                    'nullable',
                ],
                'coupon_id' => [
                    'nullable',
                    'exists:coupons,id',
                ],
                'order_discount' => [
                    'integer',
                ],
                'order_tax_rate' => [
                    'integer',
                ],
                'shipping_cost' => [
                    'integer',
                ],
            ]);

            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors()->first());
            } else {
                // $data['user_id'] = Auth::id();
                if (!isset($data['order_discount'])) {
                    $data['order_discount'] = 0;
                }
                if (!isset($data['order_tax_rate'])) {
                    $data['order_tax_rate'] = 0;
                }
                if (!isset($data['shipping_cost'])) {
                    $data['shipping_cost'] = 0;
                }
                $cash_register_data = CashRegister::where([
                    ['user_id', $data['user_id']],
                    ['warehouse_id', $data['warehouse_id']],
                    ['status', true]
                ])->first();

                if ($cash_register_data) {
                    $data['cash_register_id'] = $cash_register_data->id;
                }

                if ($data['pos']) {
                    $data['reference_no'] = 'posr-' . date("Ymd") . '-' . date("his");
                    $balance = $data['grand_total'] - $data['paid_amount'];
                    if ($balance > 0 || $balance < 0) {
                        $data['payment_status'] = 2;
                    } else {
                        $data['payment_status'] = 4;
                    }

                    if ($data['draft']) {
                        $lims_sale_data = Sale::find($data['sale_id']);
                        $lims_product_sale_data = Product_Sale::where('sale_id', $data['sale_id'])->get();
                        foreach ($lims_product_sale_data as $product_sale_data) {
                            $product_sale_data->delete();
                        }
                        $lims_sale_data->delete();
                    }
                } else {
                    $data['reference_no'] = 'sr-' . date("Ymd") . '-' . date("his");
                }

                $document = $request->document;
                if ($document) {
                    $v = Validator::make(
                        [
                            'extension' => strtolower($request->document->getClientOriginalExtension()),
                        ],
                        [
                            'extension' => 'in:jpg,jpeg,png,gif,pdf,csv,docx,xlsx,txt',
                        ]
                    );
                    if ($v->fails())
                        return redirect()->back()->withErrors($v->errors());

                    $documentName = $document->getClientOriginalName();
                    $document->move('sale/documents', $documentName);
                    $data['document'] = $documentName;
                }

                if ($data['coupon_active']) {
                    $lims_coupon_data = Coupon::where('id', $data['coupon_id'])->first();
                    $lims_coupon_data->used += 1;
                    $lims_coupon_data->save();
                }

                $lims_sale_data = Sale::create($data);

                $lims_customer_data = Customer::where('id', $data['customer_id']);
                //collecting male data
                // $mail_data['email'] = $lims_customer_data->email;
                // $mail_data['reference_no'] = $lims_sale_data->reference_no;
                // $mail_data['sale_status'] = $lims_sale_data->sale_status;
                // $mail_data['payment_status'] = $lims_sale_data->payment_status;
                // $mail_data['total_qty'] = $lims_sale_data->total_qty;
                // $mail_data['total_price'] = $lims_sale_data->total_price;
                // $mail_data['order_tax'] = $lims_sale_data->order_tax;
                // $mail_data['order_tax_rate'] = $lims_sale_data->order_tax_rate;
                // $mail_data['order_discount'] = $lims_sale_data->order_discount;
                // $mail_data['shipping_cost'] = $lims_sale_data->shipping_cost;
                // $mail_data['grand_total'] = $lims_sale_data->grand_total;
                // $mail_data['paid_amount'] = $lims_sale_data->paid_amount;

                $product_id = $data['product_id'];
                $product_code = $data['product_code'];
                $qty = $data['qty'];
                $sale_unit = $data['sale_unit'];
                $net_unit_price = $data['net_unit_price'];
                $discount = $data['discount'];
                $tax_rate = $data['tax_rate'];
                $tax = $data['tax'];
                $total = $data['subtotal'];
                $product_sale = [];

                foreach ($product_id as $i => $id) {
                    $lims_product_data = Product::where('id', $id)->first();
                    $product_sale['variant_id'] = null;
                    if ($lims_product_data->type == 'combo' && $data['sale_status'] == 1) {
                        $product_list = explode(",", $lims_product_data->product_list);
                        $qty_list = explode(",", $lims_product_data->qty_list);
                        $price_list = explode(",", $lims_product_data->price_list);

                        foreach ($product_list as $key => $child_id) {
                            $child_data = Product::where('id', $child_id)->first();
                            $child_warehouse_data = Product_Warehouse::where([
                                ['product_id', $child_id],
                                ['warehouse_id', $data['warehouse_id']],
                            ])->first();

                            $child_data->qty -= $qty[$i] * $qty_list[$key];
                            $child_warehouse_data->qty -= $qty[$i] * $qty_list[$key];

                            $child_data->save();
                            $child_warehouse_data->save();
                        }
                    }

                    if ($sale_unit[$i] != 'n/a') {
                        $lims_sale_unit_data  = Unit::where('unit_name', $sale_unit[$i])->first();
                        $sale_unit_id = $lims_sale_unit_data->id;
                        if ($lims_product_data->is_variant) {
                            $lims_product_variant_data = ProductVariant::select('id', 'variant_id', 'qty')->FindExactProductWithCode($id, $product_code[$i])->first();
                            $product_sale['variant_id'] = $lims_product_variant_data->variant_id;
                        } else {
                            $product_sale['variant_id'] = null;
                        }

                        if ($data['sale_status'] == 1) {
                            if ($lims_sale_unit_data->operator == '*') {
                                $quantity = $qty[$i] * $lims_sale_unit_data->operation_value;
                            } elseif ($lims_sale_unit_data->operator == '/') {
                                $quantity = $qty[$i] / $lims_sale_unit_data->operation_value;
                            }
                            //deduct quantity
                            $lims_product_data->qty = $lims_product_data->qty - $quantity;
                            $lims_product_data->save();
                            //deduct product variant quantity if exist
                            if ($lims_product_data->is_variant) {
                                $lims_product_variant_data->qty -= $quantity;
                                $lims_product_variant_data->save();
                                $lims_product_warehouse_data = Product_Warehouse::FindProductWithVariant($id, $lims_product_variant_data->variant_id, $data['warehouse_id'])->first();
                            } else {
                                $lims_product_warehouse_data = Product_Warehouse::FindProductWithoutVariant($id, $data['warehouse_id'])->first();
                            }
                            //deduct quantity from warehouse
                            $lims_product_warehouse_data->qty -= $quantity;
                            $lims_product_warehouse_data->save();
                        }
                    } else {
                        $sale_unit_id = 0;
                    }
                    if ($product_sale['variant_id']) {
                        $variant_data = Variant::select('name')->find($product_sale['variant_id']);
                        // $mail_data['products'][$i] = $lims_product_data->name . ' [' . $variant_data->name . ']';
                    } else
                        // $mail_data['products'][$i] = $lims_product_data->name;
                        // if ($lims_product_data->type == 'digital')
                        // $mail_data['file'][$i] = url('/product/files') . '/' . $lims_product_data->file;
                        // else
                        // $mail_data['file'][$i] = '';
                        // if ($sale_unit_id)
                        // $mail_data['unit'][$i] = $lims_sale_unit_data->unit_code;
                        // else
                        // $mail_data['unit'][$i] = '';
                        // $product_sale['indicator_tax'] = $lims_product_data->indicator_tax;
                        $product_sale['sale_id'] = $lims_sale_data->id;
                    $product_sale['product_id'] = $id;
                    $product_sale['qty'] = $qty[$i];
                    $product_sale['sale_unit_id'] = $sale_unit_id;
                    $product_sale['net_unit_price'] = $net_unit_price[$i];
                    $product_sale['discount'] = $discount[$i];
                    $product_sale['tax_rate'] = $tax_rate[$i];
                    $product_sale['tax'] = $tax[$i];
                    $product_sale['total'] =  $total[$i];
                    Product_Sale::create($product_sale);
                }

                return response()->json([
                    'body' => [
                        'message' => 'Store Pos'
                    ],
                    'data' => $data
                ], 201);
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

    public function deletePos(Request $request)
    {
        $data = $request->only([
            'id'
        ]);

        try {
            $validator = Validator::make($data, [
                'id' => [
                    'required',
                    'integer',
                    'exists:sales,id',
                ],
            ]);
            if ($validator->fails()) {
                throw new InvalidArgumentException($validator->errors()->first());
            } else {
                $lims_sale_data = Sale::find($data['id']);
                $lims_product_sale_data = Product_Sale::where('sale_id', $data['id'])->get();

                foreach ($lims_product_sale_data as $product_sale) {
                    $lims_product_data = Product::find($product_sale->product_id);
                    //adjust product quantity
                    if (($lims_sale_data->sale_status == 1) && ($lims_product_data->type == 'combo')) {
                        $product_list = explode(",", $lims_product_data->product_list);
                        $qty_list = explode(",", $lims_product_data->qty_list);

                        foreach ($product_list as $index => $child_id) {
                            $child_data = Product::find($child_id);
                            $child_warehouse_data = Product_Warehouse::where([
                                ['product_id', $child_id],
                                ['warehouse_id', $lims_sale_data->warehouse_id],
                            ])->first();

                            $child_data->qty += $product_sale->qty * $qty_list[$index];
                            $child_warehouse_data->qty += $product_sale->qty * $qty_list[$index];

                            $child_data->save();
                            $child_warehouse_data->save();
                        }
                    } elseif (($lims_sale_data->sale_status == 1) && ($product_sale->sale_unit_id != 0)) {
                        $lims_sale_unit_data = Unit::find($product_sale->sale_unit_id);
                        if ($lims_sale_unit_data->operator == '*')
                            $product_sale->qty = $product_sale->qty * $lims_sale_unit_data->operation_value;
                        else
                            $product_sale->qty = $product_sale->qty / $lims_sale_unit_data->operation_value;
                        if ($product_sale->variant_id) {
                            $lims_product_variant_data = ProductVariant::select('id', 'qty')->FindExactProduct($lims_product_data->id, $product_sale->variant_id)->first();
                            $lims_product_warehouse_data = Product_Warehouse::FindProductWithVariant($lims_product_data->id, $product_sale->variant_id, $lims_sale_data->warehouse_id)->first();
                            $lims_product_variant_data->qty += $product_sale->qty;
                            $lims_product_variant_data->save();
                        } else {
                            $lims_product_warehouse_data = Product_Warehouse::FindProductWithoutVariant($lims_product_data->id, $lims_sale_data->warehouse_id)->first();
                        }

                        $lims_product_data->qty += $product_sale->qty;
                        $lims_product_warehouse_data->qty += $product_sale->qty;
                        $lims_product_data->save();
                        $lims_product_warehouse_data->save();
                    }
                    $product_sale->delete();
                }

                if ($lims_sale_data->coupon_id) {
                    $lims_coupon_data = Coupon::find($lims_sale_data->coupon_id);
                    $lims_coupon_data->used -= 1;
                    $lims_coupon_data->save();
                }
                $lims_sale_data->delete();

                return response()->json([
                    'body' => [
                        'message' => 'Delete Pos'
                    ],
                    'data' => $lims_sale_data
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

    public function getHistory()
    {
        try {
            $lims_sale_data = Sale::with('biller', 'warehouse')
                ->get()
                
                ->map(function ($lims_sale_data) {
                    $lims_product_sale = Product_Sale::join('products', 'product_sales.product_id', '=', 'products.id')->where('sale_id', $lims_sale_data->id)
                    // ->select('products.name as nama')
                    ->get();
                    if ($lims_sale_data->order_discount > 0 && $lims_sale_data->order_discount <= 100) {
                        $total_diskon = $lims_sale_data->total_price - ($lims_sale_data->total_price * $lims_sale_data->order_discount / 100);
                    } else {
                        $total_diskon = $lims_sale_data->total_price - $lims_sale_data->order_discount;
                    }
                    if ($lims_sale_data->order_tax_rate) {
                        $total_diskon += $total_diskon * $lims_sale_data->order_tax_rate / 100;
                    }
                    if ($lims_sale_data->shipping_cost) {
                        $total_diskon += $lims_sale_data->shipping_cost;
                    }
                    return [
                        'id' => $lims_sale_data->id,
                        'kode' => $lims_sale_data->reference_no,
                        'kasir' => $lims_sale_data->biller->name,
                        'warehouse' => $lims_sale_data->warehouse->name,
                        'customer' => $lims_sale_data->customer_name,
                        'ppn' => $lims_sale_data->order_tax,
                        'diskon' => $lims_sale_data->order_discount,
                        'sub' => $lims_sale_data->total_price,
                        'total' => $total_diskon,
                        'bayar' => $lims_sale_data->paid_amount,
                        'kembalian' => $lims_sale_data->paid_amount - $total_diskon,
                        'ongkir' => $lims_sale_data->shipping_cost,
                        'tgl' => date('d M Y H:i:s', strtotime($lims_sale_data->created_at)),
                        'produk' => $lims_product_sale
                    ];
                });
            return response()->json([
                'body' => [
                    'message' => 'Get All History'
                ],
                'data' => $lims_sale_data,
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

    public function postPrint(Request $request)
    {
        try {
            $data = $request->only(["id"]);
            $validator = Validator::make($data, [
                "id"=>"required|exists:sales,id"
            ]);

            if($validator->fails()){
                throw new InvalidArgumentException($validator->errors()->first());
            }

            $lims_sale_data = Sale::with('biller', 'warehouse')
                ->where("sales.id", $data["id"])
                ->get()
                ->map(function ($lims_sale_data) {
                    $lims_product_sale = Product_Sale::join('products', 'product_sales.product_id', '=', 'products.id')->where('sale_id', $lims_sale_data->id)
                    // ->select('products.name as nama')
                    ->get();
                    if ($lims_sale_data->order_discount > 0 && $lims_sale_data->order_discount <= 100) {
                        $total_diskon = $lims_sale_data->total_price - ($lims_sale_data->total_price * $lims_sale_data->order_discount / 100);
                    } else {
                        $total_diskon = $lims_sale_data->total_price - $lims_sale_data->order_discount;
                    }
                    if ($lims_sale_data->order_tax_rate) {
                        $total_diskon += $total_diskon * $lims_sale_data->order_tax_rate / 100;
                    }
                    if ($lims_sale_data->shipping_cost) {
                        $total_diskon += $lims_sale_data->shipping_cost;
                    }
                    return [
                        'id' => $lims_sale_data->id,
                        'kode' => $lims_sale_data->reference_no,
                        'kasir' => $lims_sale_data->biller->name,
                        'warehouse' => $lims_sale_data->warehouse->name,
                        'customer' => $lims_sale_data->customer_name,
                        'ppn' => $lims_sale_data->order_tax,
                        'diskon' => $lims_sale_data->order_discount,
                        'sub' => $lims_sale_data->total_price,
                        'total' => $total_diskon,
                        'bayar' => $lims_sale_data->paid_amount,
                        'kembalian' => $lims_sale_data->paid_amount - $total_diskon,
                        'ongkir' => $lims_sale_data->shipping_cost,
                        'tgl' => date('d M Y H:i:s', strtotime($lims_sale_data->created_at)),
                        'produk' => $lims_product_sale
                    ];
                });
            return response()->json([
                'body' => [
                    'message' => 'Get Data Sale at id='.$data['id']
                ],
                'data' => $lims_sale_data,
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
