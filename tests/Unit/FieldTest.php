<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class FieldTest extends TestCase
{   
    use WithFaker;

    public $name = 'fields';
    public $model = \App\Field::class;

    # index
    public function test_get_all_projects()
    {   
        $this->login();
        $response = $this->api('GET', $this->name);
        $response->assertStatus(200);
    }

    # index - filter project_id
    public function test_get_all_projects_by_project_id()
    {   
        $this->login();
        $response = $this->api('GET', $this->name, [
            'project_id' => factory(\App\Project::class)->create()->id,
        ]);
        $response->assertStatus(200);
    }

    # index - filter field_group_id
    public function test_get_all_projects_by_field_group_id()
    {   
        $this->login();
        $field = factory(\App\Field::class)->create();
        $response = $this->api('GET', $this->name, [
            'field_group_id' => $field->field_group_id,
        ]);
        $response->assertStatus(200);
    }

    # index - filter field_group_id and 
    public function test_get_all_projects_by_field_group_id_and_project_id()
    {   
        $this->login();
        $field = factory(\App\Field::class)->create();
        $response = $this->api('GET', $this->name, [
            'project_id' => factory(\App\Project::class)->create()->id,
            'field_group_id' => $field->field_group_id,
        ]);
        $response->assertStatus(200);
    }

    # show
    public function test_get_one_project()
    {   
        $this->login();
        $field = factory($this->model)->create();
        $this->api('GET', $this->name.'/'.$field->id)
        ->assertJsonStructure(['data' => [
            'id',
            'project_id',
            'field_group_id',
            'key',
            'value',
            'created_at',
            'field_group',
        ]])->assertStatus(200);
       
    }

    # store
    public function test_create_new_project()
    {
        $this->login();
        $data = [
            'key' => $this->faker->name(),
            'value' => $this->faker->name(),
            'project_id' => factory(\App\Project::class)->create()->id,
            'field_group_id' => factory(\App\FieldGroup::class)->create()->id,
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
