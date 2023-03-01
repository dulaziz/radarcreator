<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;
    protected $table ="type_jabatan";
    protected $primarykey ="id_jabatan";
    protected $fillable = ['id_jabatan', 'jabatan', 'role'];
   
    
    public function getIncrementing()
    {
        return false;
    }    

    public function getKeyType()
    {
        return 'string';
    }
}
