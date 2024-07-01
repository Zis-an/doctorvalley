<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Location\Http\Requests\ProvinceRequest;
use Modules\Location\Services\CountryService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProvinceController extends Controller
{
    public function __construct(
        private ProvinceService $service,
        private CountryService $countryService
    )
    {
    }
    public function index(): View|Factory|Application
    {
        try{
            $provinces = $this->service->getProvinceList();
            // $countries = $this->countryService->getCountriesForSelect();
            // return view('bcscommon::location.province.index', compact('provinces', 'countries'));
<<<<<<< HEAD
            return view('backoffice.location.province.index', compact('provinces'));
=======
            return view('backoffice.location.province.index', compact('provinces', 'countries'));
>>>>>>> 34453fb87d97e94bd10833b7fb74e3827ffbb3a4
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {   $provinces = $this->service->getProvinceList();
        return view('bcscommon::location.province.index', compact('provinces'));
    }

    public function store(ProvinceRequest $request): RedirectResponse
    {
        try {
            $this->service->storeProvince($request->validated());
            return redirect()->route('backend.common.province.index')->with('success', 'Province store successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Province invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $provinces = $this->service->getProvinceList();
            $province = $this->service->getProvinceById($id);
            $countries = $this->countryService->getCountriesForSelect();

            return view('bcscommon::location.province.index',
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
            return redirect()->route('backend.common.province.index')
                ->with('success', 'Province updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Province invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backend.common.province.index')
                ->with('success', 'Province delete successfully');
        }catch (\Throwable $throwable){
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
