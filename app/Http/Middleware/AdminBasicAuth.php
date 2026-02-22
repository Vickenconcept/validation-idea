<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminBasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->getUser();
        $password = $request->getPassword();

        $expectedUser = config('app.admin_user', 'admin');
        $expectedPassword = config('app.admin_password');

        if (! $expectedPassword || $user !== $expectedUser || $password !== $expectedPassword) {
            return response('Unauthorized.', 401, [
                'WWW-Authenticate' => 'Basic realm="Admin"',
            ]);
        }

        return $next($request);
    }
}
