<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class FieldGroupTest extends TestCase
{
    use WithFaker;
    
    public $name = 'field-groups';
    public $model = \App\FieldGroup::class;

    # index
    public function test_get_all_projects()
    {   
        $this->login();
        $response = $this->api('GET', $this->name);
        $response->assertStatus(200);
    }

    # show
    public function test_get_one_project()
    {   
        $this->login();
        $project = factory($this->model)->create();
        $this->api('GET', $this->name.'/'.$project->id)
        ->assertJsonStructure(['data' => ['name']])->assertStatus(200);
    }

    # store
    public function test_create_new_project()
    {
        $this->login();
        $data = [
            'name' => $this->faker->company(),
        ];
        $this->api('POST', $this->name, $data)
        ->assertJson(['success' => true])
        ->assertJsonStructure($this->defaultStructure)
        ->assertStatus(200);
    }

    # update
    public function test_update_project()
    {
        $this->login();
        $project = factory($this->model)->create();
        $project->name = 'test_update_project_name';
        $data = $project->toArray();
        
        $this->api('PUT', $this->name.'/'.$project->id, $data)
        ->assertJson(['success' => true])
        ->assertJsonStructure($this->defaultStructure)
        ->assertStatus(200);
    }

    # destroy
    public function test_delete_project()
    {
        $this->login();
        $project = factory($this->model)->create();
        $this->api('DELETE', $this->name.'/'.$project->id)
        ->assertJson(['success' => true])
        ->assertJsonStructure($this->defaultStructure)
        ->assertStatus(200);
    }

    
    # store
    public function test_can_not_create_new_project()
    {   
        $this->login();
        $this->api('POST', $this->name, [
            
        ])
        ->assertJsonStructure($this->validationErrorStructure)
        ->assertStatus(422);
    }
    
    #update
    public function test_can_not_update_project()
    {
        $this->login();
        $project = factory($this->model)->create();
        $this->api('PUT', $this->name.'/'.$project->id, [

        ])
        ->assertJsonStructure($this->validationErrorStructure)
        ->assertStatus(422);
    }
}
