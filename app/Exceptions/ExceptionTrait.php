<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

/**
 * 
 */
trait ExceptionTrait 
{
        
    /**
     * apiException
     *
     * @param  mixed $request
     * @param  mixed $e
     * @return void
     */
    public function apiException($request, $e)
    {
        
        if ($this->isModel($e)) {

            // 
            return $this->ModelResponse($e);
        }
       
        if ($this->isHttp($e)) {

            //
            return $this->HttpResponse($e); 
        }

        if($this->isQueryException($e)){

            //
            return $this->QueryExceptionResponse($e);

        }

        if($this->isRouteNotFoundException($e)){

            //
            return $this->RouteNotFoundExceptionResponse($e);

        }

        return parent::render($request, $e);
    }

    /**
     * isModel
     *
     * @param  mixed $e
     * @return void
     */
    public function isModel($e)
    {

        return $e instanceof ModelNotFoundException;
    }

    /**
     * isHttp
     *
     * @param  mixed $e
     * @return void
     */
    public function isHttp($e)
    {

        return $e instanceof NotFoundHttpException; 
    }
    
    /**
     * isQueryException
     *
     * @param  mixed $e
     * @return void
     */
    public function isQueryException($e)
    {
        return $e instanceof QueryException;
    }
    
    /**
     * isRouteNotFoundException
     *
     * @param  mixed $e
     * @return void
     */
    public function isRouteNotFoundException($e)
    {
        return $e instanceof RouteNotFoundException;
    }
 
    /**
     * ModelResponse
     *
     * @param  mixed $e
     * @return void
     */
    public function ModelResponse($e)
    {

        return response()->json([

            'error' => 'Registro não encontrado!'
        
        ],Response::HTTP_NOT_FOUND);
    }
    
    /**
     * HttpResponse
     *
     * @param  mixed $e
     * @return void
     */
    public function HttpResponse($e)
    {
        
        return response()->json([

            'error' => 'Rota não encontrada!'
        
        ],Response::HTTP_NOT_FOUND);
    }
    
    /**
     * QueryExceptionResponse
     *
     * @param  mixed $e
     * @return void
     */
    public function QueryExceptionResponse($e)
    {
        
        return response()->json([

            'error' => 'Table not found!'
        
        ],Response::HTTP_NOT_FOUND);
    }
    
    /**
     * RouteNotFoundExceptionResponse
     *
     * @param  mixed $e
     * @return void
     */
    public function RouteNotFoundExceptionResponse($e)
    {

        return response()->json([

            'error' => 'Routa não definida!'
        
        ],Response::HTTP_NOT_FOUND);
    }
}