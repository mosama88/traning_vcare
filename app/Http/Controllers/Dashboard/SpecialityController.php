<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Speciality;
use App\Services\SpecialityService;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Http\Requests\Dashboard\SpecialityRequest;

class SpecialityController extends Controller
{

    public function __construct(public SpecialityService $service) {}


    public function index()
    {
        return response()->json([SpecialityResource::collection($this->service->all()), "Data Retrived Successfully", 200]);
    }


    public function show($id)
    {
        return response()->json([new SpecialityResource($this->service->find($id)), "Retrived Successfully", 200]);
    }


    public function store(SpecialityRequest $request)
    {
        return response()->json([new SpecialityResource($this->service->create($this->mapRequestToCulomns($request->validated()))), "Created Successfully", 201]);
    }

    public function update(SpecialityRequest $request, $id)
    {
        $this->service->find($id, $this->mapRequestToCulomns($request->validated()));
        return response()->json([], 201);
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return response()->json([], 204);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}