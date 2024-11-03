<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Location\Http\Requests\AreaRequest;
use Modules\Location\Models\City;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Location\Services\CountryService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AreaController extends Controller
{

    public function __construct(private AreaService $service,
                                private CityService $cityService,
                                private ProvinceService $provinceService,
                                private CountryService $countryService)
    {
    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $areas = $this->service->getAreaList($request->all());
            $cities = $this->cityService->getCitiesForSelect();
            // $countries = $this->countryService->getCountriesForSelect();
            // return view('bcscommon::location.area.index', compact('areas', 'countries'));
            return view('backoffice.location.area.index', compact('areas', 'cities'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {
        try{
            $areas = $this->service->getAreaList($request->all());
            $countries = $this->countryService->getCountriesForSelect();
            return view('bcscommon::location.area.index', compact('areas', 'countries'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(AreaRequest $request): RedirectResponse
    {

        try {
            $this->service->storeArea($request->validated());
            Alert::success('Success', 'Area store successfully');
            return redirect()->route('backoffice.area.index')->with('success', 'Area store successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Area invalid data');
            return redirect()->back()->with('error', 'Area invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $areas = $this->service->getAreaList($request->all());
            $area = $this->service->getAreaById($id);

            $cities = $this->cityService->getCitiesForSelect();
            $provinces = $this->provinceService->getProvincesForSelect();
            $countries = $this->countryService->getCountriesForSelect();

            return view('backoffice.location.area.index',
                compact('area','areas','cities', 'provinces', 'countries')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(AreaRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Area updated successfully');
            return redirect()->route('backoffice.area.index')
                ->with('success', 'Area updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Area invalid data');
            return redirect()->back()->with('error', 'Area invalid data')->withInput($request->all());
        }
    }

    public function getAreaByCityId(int $cityId)    {
        try {
            $areas = $this->service->getAreaByCityId($cityId);
            return response()->json([
                'status'=>'success',
                'statusCode'=>200,
                'data'=>$areas
            ]);
        }catch (\Throwable $throwable){
            return response()->json([
                'status'=>'failed',
                'statusCode'=>400,
                'message'=>'invalid request'
            ]);
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Area delete successfully');
            return redirect()->route('backoffice.area.index')
                ->with('success', 'Area delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid Area information');
            return redirect()->back()->with('error', 'Invalid Area information');
        }
    }

    public function CityFetch($province_id){
        $CityFetch = City::where('province_id',$province_id)->where('status','active')->get();
        return json_encode($CityFetch);
    }

}
