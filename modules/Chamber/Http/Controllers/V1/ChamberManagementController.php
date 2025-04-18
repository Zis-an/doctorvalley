<?php

namespace Modules\Chamber\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Chamber\Services\ChamberService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\Chamber\Http\Requests\ChamberRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberManagementController extends Controller
{
    // private ChamberService $service;

    // public function __construct()
    // {
    //     $this->service = new ChamberService();
    // }

    public function __construct(private ChamberService $service,
                                private ProvinceService $provinceService,
                                private CityService $cityService,
                                private AreaService $areaService)
    {
    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $chambers = $this->service->getChamberList($request->all());
            $chamber_types = ChamberEnum::CHAMBER_TYPE_ARRAY;
            $provinces = $this->provinceService->getProvincesForSelect();
            $cities = $this->cityService->getCitiesForSelect();
            $areas = $this->areaService->getAreasForSelect();
            return view('backoffice.chamber.chamberList', compact('chambers', 'chamber_types', 'provinces', 'cities', 'areas'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            $provinces = $this->provinceService->getProvincesForSelect();
            $cities = $this->cityService->getCitiesForSelect();
            $areas = $this->areaService->getAreasForSelect();
            $chamber_types = ChamberEnum::CHAMBER_TYPE_ARRAY;
            return view('backoffice.chamber.createUpdateChamber', compact('provinces', 'cities', 'areas', 'chamber_types'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(ChamberRequest $request): RedirectResponse
    {
        try {
            $this->service->storeChamber($request->validated());
            Alert::success('Success', 'Chamber stored successfully');
            return redirect()->route('backoffice.chamber.index')->with('success', 'Chamber stored successfully');
        } catch (\Throwable $throwable){
            Alert::error('Error!', 'Chamber invalid data');
            return redirect()->back()->with('error', 'Chamber invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $chamber = $this->service->getChamberById($id);
            $provinces = $this->provinceService->getProvincesForSelect();
            $cities = $this->cityService->getCitiesForSelect();
            $areas = $this->areaService->getAreasForSelect();
            $chamber_types = ChamberEnum::CHAMBER_TYPE_ARRAY;
            return view('backoffice.chamber.createUpdateChamber', compact('chamber', 'provinces', 'cities', 'areas', 'chamber_types'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(ChamberRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Chamber Updated successfully');
            return redirect()->route('backoffice.chamber.index')
                ->with('success', 'Chamber updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error!', 'Chamber invalid data');
            return redirect()->back()->with('error', 'Chamber invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Chamber deleted successfully');
            return redirect()->route('backoffice.chamber.index')
                ->with('success', 'Chamber deleted successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error!', 'Invalid Chamber information');
            return redirect()->back()->with('error', 'Invalid Chamber information');
        }
    }
}
