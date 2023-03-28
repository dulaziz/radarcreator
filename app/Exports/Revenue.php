<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Revenue implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $bulanSekarang = date('m');
        $tahunSekarang = date('Y');
        
    
        return DB::table('tb_upload')
            ->select('tb_upload.isentif', 'tb_upload.impression_harian', 'tb_upload.viewer_harian', 'tb_upload.name_upload', 'tb_upload.published_date')
            ->where('tb_upload.status', '=', 'Published')
            ->whereMonth('tb_upload.created_at', $bulanSekarang)
            ->whereYear('tb_upload.created_at', $tahunSekarang)
            ->get();
    }
    public function headings(): array
    {
        return ["Revenue_14Hari ", "Impression", "Viewer", "Nama", "Tanggal Publish"];
    }
}
