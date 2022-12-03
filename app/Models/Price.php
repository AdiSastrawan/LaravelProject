<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $primaryKey='price_id';
    protected $table="prices";
    protected $fillable=[
        'price_name', 'monthly_price', 'price_date_from', 'price_date_end', 'day'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class, 'package_id', 'package_id');
    }
}
