<?php

namespace App\Http\Controllers\Field;

use App\Field;
use App\Helpers\Respond;
use App\Http\Controllers\Controller;
use App\Http\Requests\Field\StoreRequest;
use App\Http\Requests\Field\UpdateRequest;

class FieldController extends Controller
{   
    public $resource = 'Field';

    public function __construct() 
    {
        $this->respond = new Respond;
        $this->model = new Field;
        $this->fields = $this->fields ?? $this->model->getFillable();
    }
   
    public function index()
    {   
        $field = $this->model
        ->when(request()->has('project_id'), function($query){
           return $query->where('project_id', request()->project_id); 
        })
        ->when(request()->has('field_group_id'), function($query){
            return $query->where('field_group_id', request()->field_group_id);
         })
        ->paginate(10);
        return $this->respond->collection($this->resource, $field);
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
        if($field = $this->model->create($data)) {
            return $this->respond->new($this->resource, $field);
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