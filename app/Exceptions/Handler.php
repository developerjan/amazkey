<?php

namespace App\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($request->ajax()) {
            if($exception instanceof ValidationException) {
                $errors = '';
                $validationErrors = $exception->validator->errors()->messages();
                foreach($validationErrors as $error) {
                    $errors .= $error[0]."<br>";
                }
                return response()->json([
                    'success' => false,
                    'errors' => $errors
                ]);
            }

	        if($exception instanceof ClientException) {
		        $message = env('APP_ENV') === 'dev' ? $exception->getMessage() : 'An unknown error occurred. Please try again';
		        return response()->json([
			        'success' => false,
			        'message' => $exception->getCode() == 403 ? 'Invalid credentials' : $message
		        ]);
	        }
        }

        return parent::render($request, $exception);
    }
}
