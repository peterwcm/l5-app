<?php

namespace App\Http\Middleware;

use Closure;

class VerifyApiKey
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
        if ($request->method() == 'POST' && $request->input('api_key') != getenv('API_KEY')) {
            return response()->json(
                \JsonHelper::getErrorResponse(\HttpResponse::HTTP_UNAUTHORIZED, 'API key is invalid.'),
                \HttpResponse::HTTP_UNAUTHORIZED
            );
        }

		return $next($request);
	}
}
