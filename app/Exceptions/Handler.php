<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
    // public function render($request, Exception $exception)
    // {
    //     return parent::render($request, $exception);
    // }
    public function render($request, Exception $e)
    {
        if ($this->isHttpException($e)) {
            switch ($e->getStatusCode()) {
                // not found
                case '404':
                    return \Response::view('404', [], 404);
                    break;
                // internal error
                case '500':
                    return \Response::view('500', [], 500);
                    break;
                default:
                    return $this->renderHttpException($e);
                    break;
            }
        } else {
            return parent::render($request, $e);
        }
    }
}
