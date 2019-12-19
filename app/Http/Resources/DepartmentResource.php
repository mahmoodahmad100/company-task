<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DepartmentResource extends Resource
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
            'id'   => $this->id,
            'name' => $this->name,
            $this->mergeWhen($request->route()->getName() == 'departments.show', [
                'manager'   => new ManagerResource($this->manager),
                'employees' => EmployeeResource::collection($this->employees)
            ])
        ];
    }
}
