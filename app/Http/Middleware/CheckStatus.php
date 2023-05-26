<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    // Cek apakah pengguna sudah terotentikasi
    if (!Auth::check()) {
        // Redirect pengguna ke halaman login jika belum terotentikasi
        return redirect()->route('login');
    }

    // Cek peran pengguna
    $user = Auth::user();
    if ($user->role !== 'User') {
        // Redirect pengguna ke halaman lain jika tidak memiliki peran yang sesuai
        return redirect()->route('user')->with('error', 'Anda tidak memiliki akses ke halaman ini');
    }

    // Lanjutkan ke tindakan berikutnya jika pengguna memiliki peran yang sesuai
    return $next($request);
}
}