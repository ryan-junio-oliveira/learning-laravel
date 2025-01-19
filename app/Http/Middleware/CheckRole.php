<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $idUser = Auth::id();
        $user = User::findOrFail($idUser);

        if ($user->hasAnyRole($roles)) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have access to this resource.');
    }
}

