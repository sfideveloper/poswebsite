<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluaran";
    protected $fillable = [
        "kasir",
        "warehouse",
        "barang",
        "jml_pengeluaran",
        "foto_pengeluaran",
        "tgl_pengeluaran",
    ];
    
    public function biller(){
        return $this->belongsTo("App\Biller", "kasir");
    }

    public function warehouse()
    {
        return $this->belongsTo("App\Warehouse", "warehouse");
    }
}
