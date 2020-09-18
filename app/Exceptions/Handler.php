<?php

namespace App\Exceptions;

use App\Exceptions\ExceptionTrait; 
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Exception\RouteNotFoundException;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

class Handler extends ExceptionHandler
{

    use ExceptionTrait; 

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        /**
         * Para validar os erros chamda o endpoint através do navegador,
         * desabilitar a validação if($request->expectsJson()) 
         */
        if($request->expectsJson()){

            //
           return $this->apiException($request, $exception); 
        }

        //
        return $this->apiException($request, $exception);

        return parent::render($request, $exception);
    }
}