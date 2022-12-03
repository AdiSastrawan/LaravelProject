<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $primaryKey='room_id';
    protected $table="rooms";
    protected $fillable=[
        'room_number', 'package_id', 'price_id', 'max_resident', 'room_booked', 'package_code', 'package_name', 'permalink', 'package_desc', 'feature_img', 'price_name', 'monthly_price', 'price_date_from', 'price_date_end', 'day'
    ];

    public function packages()
    {
        return $this->belongsTo(Package::class, 'package_id', 'package_id');
    }

    public function prices()
    {
        return $this->belongsTo(Price::class, 'price_id', 'price_id');
    }
}
