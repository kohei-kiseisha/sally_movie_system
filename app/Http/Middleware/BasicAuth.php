<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Basic認証が無効（.envで設定なし）の場合はスルー
        $user = config('auth.basic_user');
        $pass = config('auth.basic_password');

        if (empty($user) || empty($pass)) {
            return $next($request);
        }

        // 認証チェック
        if ($request->getUser() !== $user || $request->getPassword() !== $pass) {
            return new Response('Unauthorized', 401, [
                'WWW-Authenticate' => 'Basic realm="SALLY141 Learning Prototype"',
            ]);
        }

        return $next($request);
    }
}
