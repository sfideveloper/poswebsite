<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    protected $table = "wifi";
    protected $fillable = ['ssid', 'password'];
}
