<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WithAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->isStarted()) session()->start();
        if (session()->get('role')){
            return redirect()
            ->route('index')
            ->withErrors([
                'msg' => 'anda bukan pendonor'
            ]);
        }
        if (!session()->get('logged',false)){
            return redirect()
                ->route('index')
                ->withErrors([
                    'msg' => 'mohon login terlebih dahulu'
                ]);
        }
        return $next($request);
    }
}
