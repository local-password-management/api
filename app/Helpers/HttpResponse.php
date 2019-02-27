<?php

namespace App\Helpers;

trait HttpResponse
{
    public function success($code = 200)
    {
        return $this->condition(true, $code);
    }

    public function error($code = 401)
    {   
        return $this->condition(false, $code);
    }

    public function badRequest($code = 400)
    {
        return $this->condition(false, $code);
    }

    public function unauthorized()
    {
        return $this->condition(false, 401);
    }

    public function notFound()
    {
        return $this->condition(false, 404);
    }

    public function methodNotAllowed()
    {
        return $this->condition(false, 405);
    }

    public function tooManyRequests()
    {
        return $this->condition(false, 429);
    }

    // public function noContent()
    // {
    //     return $this->condition(true, 204);
    // }

    public function created()
    {
        return $this->condition(true, 201);
    }

    public function forbidden()
    {
        return $this->condition(false, 403);
    }
}