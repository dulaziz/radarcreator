<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insentif extends Model
{
    use HasFactory;
    protected $table ="isentif";
    protected $primarykey ="id";
    protected $fillable = ['id', 'nama', 'pendapatan', 'judul_video'];
   
    
    public function getIncrementing()
    {
        return false;
    }    

    public function getKeyType()
    {
        return 'string';
    }
}
