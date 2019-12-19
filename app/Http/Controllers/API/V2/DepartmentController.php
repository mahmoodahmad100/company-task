<?php

namespace App\Http\Controllers\API\V2;

use App\Http\Controllers\ApiController;
use App\Models\Department as Model;

class DepartmentController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param  object  $department
     * @return \Illuminate\Http\Response
     */
    public function index(Model $department)
    {
        return $department->with('manager', 'employees')->get();
    }
}
