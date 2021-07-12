<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class first extends Model
{
    // use HasFactory;
    protected $table = 'first';

    protected $fillable = [
        'id', 'name', 'teacher_id'
    ];

    public function teacher(){
     
        return $this->belongsTo(second::Class); 


    }
}
