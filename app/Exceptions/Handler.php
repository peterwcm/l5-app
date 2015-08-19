<?php namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;

class Handler extends ExceptionHandler {

	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		return parent::report($e);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{
        if ($e instanceof TokenInvalidException || $e instanceof JWTException)
        {
            return response()->json(
                \JsonHelper::getErrorResponse(\HttpResponse::HTTP_UNAUTHORIZED, 'Token is invalid.'),
                \HttpResponse::HTTP_UNAUTHORIZED
            );
        }
        if ($e instanceof TokenExpiredException)
        {
            return response()->json(
                \JsonHelper::getErrorResponse(\HttpResponse::HTTP_UNAUTHORIZED, 'Token has expired.'),
                \HttpResponse::HTTP_UNAUTHORIZED
            );
        }

		return parent::render($request, $e);
	}

}
