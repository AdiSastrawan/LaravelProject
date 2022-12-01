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
        'package_code', 'package_name', 'permalink', 'package_desc', 'feature_img', 'room_id '
    ];

    public function packages()
    {
        return $this->hasMany(Room::class, 'package_id', 'package_id');
    }
}
