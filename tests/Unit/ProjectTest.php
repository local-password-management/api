<?php

namespace Tests\Unit;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class ProjectTest extends TestCase
{   
    use WithFaker;

    /**
     * index
     */
    public function test_get_all_projects()
    {   
        $this->login();
        $response = $this->api('GET', 'projects');
        $response->assertStatus(200);
    }

    /**
     * @todo Something
     */
    public function test_get_all_projects_by_status()
    {   
        $this->login();
        $response = $this->api('GET', 'projects', [
            'status' => 1,
        ]);
        $response->assertStatus(200);
    }

    # show
    public function test_get_one_project()
    {   
        $this->login();
        $project = factory(Project::class)->create();
        $this->api('GET', 'projects/'.$project->id)
        ->assertJsonStructure(['data' => [
            'id',
            'name',
            'host',
            'domain',
            'status',
            'created_at',
        ]])->assertStatus(200);
    }

    # store
    public function test_create_new_project()
    {
        $this->login();
        $data = [
            'name' => $this->faker->company(),
            'host' => $this->faker->ipv4(),
            'domain' => $this->faker->safeEmailDomain(),
            'status' => 1,
        ];
        $this->api('POST', 'projects', $data)
        ->assertJsonStructure(['data' => [
            'id',
            'name',
            'host',
            'domain',
            'status',
            'created_at',
        ]])->assertStatus(201);
    }

    # update
    public function test_update_project()
    {
        $this->login();
        $project = factory(Project::class)->create();
        $project->name = 'test_update_project_name';
        $data = $project->toArray();
        
        $this->api('PUT', 'projects/'.$project->id, $data)
        ->assertJson(['success' => true])
        ->assertJsonStructure($this->defaultStructure)
        ->assertStatus(200);
    }

    # destroy
    public function test_delete_project()
    {
        $this->login();
        $project = factory(Project::class)->create();
        $this->api('DELETE', 'projects/'.$project->id)
        ->assertJson(['success' => true])
        ->assertJsonStructure($this->defaultStructure)
        ->assertStatus(200);
    }

    
    # store
    public function test_can_not_create_new_project()
    {   
        $this->login();
        $this->api('POST', 'projects', [
            
        ])
        ->assertJsonStructure($this->validationErrorStructure)
        ->assertStatus(422);
    }
    
    #update
    public function test_can_not_update_project()
    {
        $this->login();
        $project = factory(Project::class)->create();
        $this->api('PUT', 'projects/'.$project->id, [

        ])
        ->assertJsonStructure($this->validationErrorStructure)
        ->assertStatus(422);
    }
}