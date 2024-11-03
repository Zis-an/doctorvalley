<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Location\Http\Requests\ProvinceRequest;
use Modules\Location\Services\CountryService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class ProvinceController extends Controller
{
    public function __construct(
        private ProvinceService $service,
        private CountryService $countryService
    )
    {
    }
    public function index(Request $request): View|Factory|Application
    {
        try{
            $provinces = $this->service->getProvinceList($request->all());
            // $countries = $this->countryService->getCountriesForSelect();
            // return view('bcscommon::location.province.index', compact('provinces', 'countries'));
            return view('backoffice.location.province.index', compact('provinces'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {   $provinces = $this->service->getProvinceList($request->all());
        return view('bcscommon::location.province.index', compact('provinces'));
    }

    public function store(ProvinceRequest $request): RedirectResponse
    {
        try {
            $this->service->storeProvince($request->validated());
            Alert::success('Success', 'Province store successfully');
            return redirect()->route('backoffice.province.index')->with('success', 'Province store successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Province invalid data');
            return redirect()->back()->with('error', 'Province invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $provinces = $this->service->getProvinceList($request->all());
            $province = $this->service->getProvinceById($id);
            $countries = $this->countryService->getCountriesForSelect();

            return view('backoffice.location.province.index',
                compact('province', 'provinces', 'countries')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(ProvinceRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Province updated successfully');
            return redirect()->route('backoffice.province.index')
                ->with('success', 'Province updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Province invalid data');
            return redirect()->back()->with('error', 'Province invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Province delete successfully');
            return redirect()->route('backoffice.province.index')
                ->with('success', 'Province delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid Province information');
            return redirect()->back()->with('error', 'Invalid Province information');
        }
    }

    public function getProvinceByCountryId(int $countryId): \Illuminate\Http\JsonResponse
    {
        try {
            $provinces = $this->service->getProvinceByCountryId($countryId);
            return response()->json([
                'status'=>'success',
                'statusCode'=>200,
                'data'=>$provinces
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
