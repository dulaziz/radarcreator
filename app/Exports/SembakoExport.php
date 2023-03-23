<?php

namespace App\Exports;
use App\Models\upload;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SembakoExport implements FromView
{
    public function view(): View
    {
        return view('page.revenue.index', [
            'datas' => upload::all(),
        ]);
    }
}