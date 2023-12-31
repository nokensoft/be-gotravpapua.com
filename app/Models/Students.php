<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function program()
    {
        return $this->belongsToMany(Program::class, 'student_program');
    }

    public function provinces(){
        return $this->belongsTo(Province::class,'province_id', 'id');
    }
}
