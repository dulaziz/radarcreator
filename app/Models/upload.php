<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
class upload extends Model
{
    use HasFactory;
    
    use LogsActivity;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table ="tb_upload";
    protected $primarykey ="id";
    protected $fillable = ['tanggal', 'id_group', 'video_title', 'video', 'produksi', 'name', 'platform', 'status', 'bulan', 'name_upload'];
    protected $hidden = [
        'remember_token',
    ];
    protected static $logName = 'name_upload';
    protected static $logFillable = true;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    
}


