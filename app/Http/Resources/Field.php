<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Field extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        return [
            'id' => $this->id,
            'project_id' => $this->project_id,
            'field_group_id' => $this->field_group_id,
            'key' => $this->key,
            'value' => $this->value,
            'created_at' => (string) $this->created_at,
            'field_group' => $this->group,
            // 'project' => $this->project,
        ];
    }
}