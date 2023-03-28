<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_total extends Model
{
    use HasFactory;
    
    protected $table ="tb_total";
    protected $primarykey ="id";
    protected $fillable = ['id','total'];
    protected $hidden = [
        'remember_token',
    ];
}