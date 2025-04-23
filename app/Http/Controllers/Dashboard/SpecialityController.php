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
        $country = Speciality::paginate(10);
        return response()->json([SpecialityResource::collection($country), "Data Retrived Successfully", 200]);
    }


    public function show(Speciality $country)
    {
        return response()->json([new SpecialityResource($country), "Data Retrived Successfully", 200]);
    }


    public function store(SpecialityRequest $request)
    {

        $country = Speciality::create($this->mapRequestToCulomns($request->validated()));

        return response()->json(['data' => new SpecialityResource($country), "Data Inserted Successfully", 200]);
    }


    public function update(SpecialityRequest  $request, Speciality $country)
    {
        $country->update($this->mapRequestToCulomns($request->validated()));

        return response()->json([new SpecialityResource($country), "Data Updated Successfully", 200]);
    }


    public function destroy(Speciality $country)
    {
        $country->delete();

        return response()->json([new SpecialityResource($country), "Data Deleted Successfully", 200]);
    }


    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}