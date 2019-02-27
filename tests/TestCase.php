<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $prefix = '/api/';

    public function setUp()
    {   
        parent::setUp();
        if(! $this->user = User::find(1)) {
            $this->user = factory(User::class)->create();
        }
        
        $this->defaultStructure = [
            'success',
            'code',
            'locale',
            'message',
            'data',
        ];
        
        $this->validationErrorStructure = [
            "message" ,"errors" => []
        ];
    }

    public function login()
    {
        $this->actingAs($this->user, 'api');
    }

    public function api($method, $url, array $data = [])
    {   
        return $this->json($method, $this->prefix.$url, $data);
    }
}