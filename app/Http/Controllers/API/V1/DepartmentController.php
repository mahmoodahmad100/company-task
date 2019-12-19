<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\ApiController;
use App\Http\Resources\DepartmentResource as Resource;
use App\Models\Department as Model;

class DepartmentController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param  object  $department
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/users",
     *     produces={"application/json"},
     *     tags={"Department"},
     *     @SWG\Parameter(
     *         name="Authorization",
     *         in="header",
     *         description="Bearer + token",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful action."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(Model $department)
    {
        return Resource::collection($department->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  object  $department
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/users/{id}",
     *     produces={"application/json"},
     *     tags={"Department"},
     *     @SWG\Parameter(
     *         name="Authorization",
     *         in="header",
     *         description="Bearer + token",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="user id",
     *         required=true,
     *         type="integer",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful action."
     *     )
     * )
     */
    public function show(Model $department)
    {
        return new Resource($department);
    }
}
