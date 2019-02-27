<?php

namespace App\Helpers;

class Respond extends \Illuminate\Routing\ResponseFactory
{   
    use HttpResponse;
    
    public function __construct()
    {
        $this->resolver = new Resolver;
        $this->messages = new Messages;
    }

    public function getMessage($code)
    {
        return $this->messages->get($code);
    }

    public function new($resource, $model)
    {   
        return $this->resolver->resolve($resource, 'make', $model);
    }

    public function collection($resource, $model)
    {   
        return $this->resolver->resolve($resource, 'collection', $model);
    }

    public function if($condition, $code = null, array $data = [])
    {
        return $this->condition($condition, $code, $data);
    }
    
    public function condition($condition, $code = null, array $data = [])
    {   
        $condition = $condition ? true : false;
        if($condition) {
            $code = $code == null ? 200 : $code;
        } else {
            $code = $code == null ? 400 : $code;
        }

        return $this->json([
            'success' => $condition,
            'code' => $code,
            'locale'=> \App::getLocale(),
            'message'=> $this->getMessage($code),
            'data'=> $data,
        ]);
    }

    public function newOrError($condition)
    {
        
    }

    public function makeApiResponse($message, $code = 200, $success = null, array $data = [])
    {   
        return $this->json([
            'success' => $success ,
            'code' => $code,
            'locale'=> \App::getLocale(),
            'message'=> $message,
            'data'=> $data,
        ]);
    }
}