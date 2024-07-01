<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Location\Http\Requests\CityRequest;
use Modules\Location\Services\CityService;
use Modules\Location\Services\CountryService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class CityController extends Controller
{
    public function __construct(
        private CityService $service,
        private ProvinceService $provinceService,
        private CountryService $countryService)
    {
    }

    public function index(): View|Factory|Application
    {
        try{
            $cities = $this->service->getCityList();
            $provinces = $this->provinceService->getProvincesForSelect();
            // $countries = $this->countryService->getCountriesForSelect();
            // return view('bcscommon::location.city.index', compact('cities', 'countries'));
            return view('backoffice.location.city.index', compact('cities', 'provinces'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            $cities = $this->service->getCityList();
            $countries = $this->countryService->getCountriesForSelect();
            return view('bcscommon::location.city.index', compact('cities', 'countries'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function store(CityRequest $request): RedirectResponse
    {

        try {
            $this->service->storeCity($request->validated());
            return redirect()->route('backend.common.city.index')->with('success', 'City store successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'City invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $cities = $this->service->getCityList();
            $city = $this->service->getCityById($id);
            $provinces = $this->provinceService->getProvincesForSelect();

            return view('bcscommon::location.city.index',
                compact('city','cities', 'provinces')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(CityRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('backend.common.city.index')
                ->with('success', 'City updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'City invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backend.common.city.index')
                ->with('success', 'City delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid City information');
        }
    }

    public function getCityByProvinceId(int $provinceId): \Illuminate\Http\JsonResponse
    {
        try {
            $cities = $this->service->getCityByProvinceId($provinceId);
            return response()->json([
                'status'=>'success',
                'statusCode'=>200,
                'data'=>$cities
            ]);
        }catch (\Throwable $throwable){
            return response()->json([
                'status'=>'failed',
                'statusCode'=>400,
                'message'=>'invalid request'
            ]);
        }
    }



}
