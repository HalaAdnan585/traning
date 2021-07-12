<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class second extends Model
{
    protected $table = 'second';

    protected $fillable = [
        'id', 'Name'
    ];
public function students(){
    return $this->hasMany(first::Class);
}
}
