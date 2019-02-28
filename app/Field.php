<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['key', 'value', 'content', 'project_id', 'field_group_id'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function group()
    {
        return $this->belongsTo('App\FieldGroup', 'field_group_id');
    }
}