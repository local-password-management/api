<?php

namespace App\Http\Controllers\Field;

use App\FieldGroup;
use App\Helpers\Respond;
use App\Http\Requests\FieldGroup\StoreRequest;
use App\Http\Requests\FieldGroup\UpdateRequest;
use App\Http\Controllers\Controller;

class FieldGroupController extends Controller
{   
    public $resource = 'FieldGroup';

    public function __construct() 
    {
        $this->respond = new Respond;
        $this->model = new FieldGroup;
        $this->fields = $this->fields ?? $this->model->getFillable();
    }
   
    public function index()
    {   
        $project = $this->model->paginate(10);
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
        $data = $request->only($this->fields);
        return $this->respond->condition($this->model->create($data));
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
        $project->update($request->only($this->fields));
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