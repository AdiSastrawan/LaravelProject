<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
    use HasFactory;
    public $primaryKey = 'rent_id';
    protected $table = 'rents';

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
    public function rooms()
    {
        return $this->hasOne(Room::class, 'room_id', 'room_id');
    }
}
