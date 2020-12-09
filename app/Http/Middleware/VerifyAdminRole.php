<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */

    const Admin = 'admin';

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $role = $this->getUserRole($user);

        if ($role === self::Admin) {
            return $next($request);
        }

        return redirect()->route('home');
    }

    protected function getUserRole($user)
    {
        $user = Auth::user()->username;
        return $user;
    }
}
