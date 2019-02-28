<?php

namespace App\Http\Controllers\Project;

use App\Project;
use App\Helpers\Respond;
use App\Http\Requests\Project\StoreRequest;
use App\Http\Requests\Project\UpdateRequest;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{   

    public function __construct() 
    {
        $this->respond = new Respond;
        $this->model = new Project;
        $this->resource = 'Project';
    }
   
    public function index()
    {   
        $project = $this->model->when(request()->has('status'), function($query){
            return $query->where('status', request()->status);
        })->paginate(10);
        return $this->respond->collection($this->resource, $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->only('name', 'domain', 'host', 'status');
        if($project = $this->model->create($data)) {
            return $this->respond->new($this->resource, $project);
        }
        return $this->error();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        return $this->respond->new($this->resource, $this->model->findOrFail($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $project = $this->model->findOrFail($id);
        $project->update($request->only(['name', 'domain', 'host', 'status']));
        return $this->respond->success();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        return $this->respond->condition($this->model->findOrfail($id)->delete());
    }
}