<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DoctorTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorTitleResource;
use App\Http\Requests\Dashboard\DoctorTitleRequest;

class DoctorTitleController extends Controller
{
    public function index()
    {
        $data = DoctorTitle::paginate(10);
        return response()->json([DoctorTitleResource::collection($data), "Data retrived Successfully", 201]);
    }

    public function show(DoctorTitle $doctorTitle)
    {
        return response()->json([new DoctorTitleResource($doctorTitle), "Data retrived Successfully", 201]);
    }

    public function store(DoctorTitleRequest $request)
    {
        $dataInserted = DoctorTitle::create($this->mapRequestToCulomns($request->validated()));
        return response()->json(['data' => new DoctorTitleResource($dataInserted), "Data Inserted Successfully", 201]);
    }


    public function update(DoctorTitleRequest $request, DoctorTitle $doctorTitle)
    {
        $doctorTitle->update($this->mapRequestToCulomns($request->validated()));

        return response()->json([new DoctorTitleResource($doctorTitle), "Data Updated Successfully", 201]);
    }


    public function destroy(DoctorTitle $doctorTitle)
    {
        $doctorTitle->delete();

        return response()->json([new DoctorTitleResource($doctorTitle), "Data Deleted Successfully", 201]);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['doctor_title']];
    }
}
