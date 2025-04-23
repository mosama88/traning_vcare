<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Requests\Dashboard\CountryRequest;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::paginate(10);
        return response()->json([CountryResource::collection($country), "Data Retrived Successfully", 200]);
    }


    public function show(Country $country)
    {
        return response()->json([new CountryResource($country), "Data Retrived Successfully", 200]);
    }


    public function store(CountryRequest $request)
    {

        $country = Country::create($this->mapRequestToCulomns($request->validated()));

        return response()->json(['data' => new CountryResource($country), "Data Inserted Successfully", 200]);
    }


    public function update(CountryRequest $request, Country $country)
    {
        $country->update($this->mapRequestToCulomns($request->validated()));

        return response()->json([new CountryResource($country), "Data Updated Successfully", 200]);
    }


    public function destroy(Country $country)
    {
        $country->delete();

        return response()->json([new CountryResource($country), "Data Deleted Successfully", 200]);
    }


    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['country_name']];
    }
}
