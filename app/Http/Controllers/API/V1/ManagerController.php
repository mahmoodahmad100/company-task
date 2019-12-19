<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ManagerResource as Resource;
use App\Models\Manager as Model;

class ManagerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param  object  $manager
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/users",
     *     produces={"application/json"},
     *     tags={"Manager"},
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
    public function index(Model $manager)
    {
        return Resource::collection($manager->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  object  $manager
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/users/{id}",
     *     produces={"application/json"},
     *     tags={"Manager"},
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
    public function show(Model $manager)
    {
        return new Resource($manager);
    }
}
