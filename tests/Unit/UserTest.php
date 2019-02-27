<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    
    public function test_get_auth_user()
    {   
        $this->login();
        $this->api('GET', 'me')
        ->assertStatus(200);
    }
}