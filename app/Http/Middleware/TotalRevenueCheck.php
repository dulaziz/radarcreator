<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class TotalRevenueCheck
{
    public function handle($request, Closure $next)
    {
        $totalRevenue = DB::table('tb_total')->sum('total'); // Ubah sesuai dengan model/tabel Total Revenue Anda

        if ($totalRevenue === 0) {
            return redirect('/revenue')->with('error', 'Inputkan total bulan dahulu!.'); 
        }

        return $next($request);
    }
}