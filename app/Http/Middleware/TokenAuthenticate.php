<?php namespace App\Http\Middleware;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Events\Dispatcher;
use Tymon\JWTAuth\JWTAuth;

class TokenAuthenticate {
    /**
     * @var \Illuminate\Routing\ResponseFactory
     */
    protected $response;

    /**
     * @var \Illuminate\Events\Dispatcher
     */
    protected $events;

    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    protected $auth;

    /**
     * Create a new BaseMiddleware instance
     *
     * @param \Illuminate\Routing\ResponseFactory  $response
     * @param \Illuminate\Events\Dispatcher  $events
     * @param \Tymon\JWTAuth\JWTAuth  $auth
     */
    public function __construct(ResponseFactory $response, Dispatcher $events, JWTAuth $auth)
    {
        $this->response = $response;
        $this->events = $events;
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        if (! $token = $this->auth->setRequest($request)->getToken()) {
            return response()->json(
                \JsonHelper::getErrorResponse(\HttpResponse::HTTP_BAD_REQUEST, 'Token is missing.'),
                \HttpResponse::HTTP_BAD_REQUEST
            );
        }

        $user = $this->auth->authenticate($token);

        if (! $user) {
            return response()->json(
                \JsonHelper::getErrorResponse(\HttpResponse::HTTP_NOT_FOUND, 'User not found.'),
                \HttpResponse::HTTP_NOT_FOUND
            );
        }

        return $next($request);
    }
}
