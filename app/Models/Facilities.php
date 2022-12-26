<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;
    public $primaryKey = 'facility_id';
    protected $table = "facilities";

    public function packages()
    {
        return $this->hasOne(Package::class, 'facility_id', 'facility_id');
    }
}
