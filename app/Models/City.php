<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'city_name',
        'city_type'
    ];
    protected $primaryKey = 'city_id';
    protected $table = 'tbl_city';

    
}
