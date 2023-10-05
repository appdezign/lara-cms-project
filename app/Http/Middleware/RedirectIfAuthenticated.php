<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next, string ...$guards): Response
	{
		$guards = empty($guards) ? [null] : $guards;

		foreach ($guards as $guard) {
			if (Auth::guard($guard)->check()) {
				$user = Auth::user();

				// redirect
				$has_backend_access = false;
				foreach ($user->roles as $role) {
					if ($role->has_backend_access == 1) {
						$has_backend_access = true;
					}
				}

				if ($has_backend_access) {
					return redirect()->intended(route('admin.dashboard.index'));
				} else {
					return redirect()->intended(route('special.home.show'));
				}
			}
		}

		return $next($request);
	}
}
