<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_user extends Model
{
    use HasFactory;
    protected $table ="tb_user";
    protected $primarykey ="id_user";
    protected $fillable = ['id','produksi','name'];
    protected $hidden = [
        'remember_token',
    ];}
