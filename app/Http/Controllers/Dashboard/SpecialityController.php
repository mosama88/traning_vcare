<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Http\Requests\Dashboard\SpecialityRequest;

class SpecialityController extends Controller
{
    public function index()
    {
        $speciality = Speciality::paginate(10);
        return response()->json([SpecialityResource::collection($speciality), "Data Retrived Successfully", 200]);
    }


    public function show(Speciality $speciality)
    {
        return response()->json([new SpecialityResource($speciality), "Data Retrived Successfully", 200]);
    }


    public function store(SpecialityRequest $request)
    {

        $speciality = Speciality::create($this->mapRequestToCulomns($request->validated()));

        return response()->json(['data' => new SpecialityResource($speciality), "Data Inserted Successfully", 200]);
    }


    public function update(SpecialityRequest  $request, Speciality $speciality)
    {
        $speciality->update($this->mapRequestToCulomns($request->validated()));

        return response()->json([new SpecialityResource($speciality), "Data Updated Successfully", 200]);
    }


    public function destroy(Speciality $speciality)
    {
        $speciality->delete();

        return response()->json([new SpecialityResource($speciality), "Data Deleted Successfully", 200]);
    }


    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}
