<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function destinations()
    {
        return $this->belongsTo(TourDestination::class,'destinations_id','id');
    }

}
