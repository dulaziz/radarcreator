<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table ="tb_upload";
    protected $primarykey ="id";
    protected $fillable = ['tanggal', 'id_group', 'video_title', 'video', 'produksi', 'name', 'platform', 'status', 'bulan'];
    protected $hidden = [
        'remember_token',
    ];

}
