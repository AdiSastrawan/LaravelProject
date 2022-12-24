<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table="packages";
    protected $fillable=[
        'package_code', 'package_name', 'permalink', 'package_desc', 'feature_img', 'price_id', 'monthly_price'
    ];

    public function rooms(){
        return $this->hasMany(Room::class, 'package_id', 'package_id');
    }

    public function prices(){
        return $this->hasOne(Price::class, 'price_id','price_id');
    }
}
