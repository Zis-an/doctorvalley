<?php

namespace Modules\Chamber\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Chamber\Services\ChamberService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\Chamber\Http\Requests\ChamberRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberProfileManagementController extends Controller
{
    public function __construct(private ChamberService $service,
                                private ProvinceService $provinceService,
                                private CityService $cityService,
                                private AreaService $areaService)
    {
    }

    public function chamberProfile(int $id): Factory|View|Application
    {
        try {
            $chamber = $this->service->getChamberById($id);
            $provinces = $this->provinceService->getProvincesForSelect();
            $cities = $this->cityService->getCitiesForSelect();
            $areas = $this->areaService->getAreasForSelect();
            $chamber_types = ChamberEnum::CHAMBER_TYPE_ARRAY;
            return view('chamber.profile', compact('chamber', 'provinces', 'cities', 'areas', 'chamber_types'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function chamberProfileUpdate(ChamberRequest $request, int $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->service->updateData($id, $request->validated());
            DB::commit();
            Alert::success('Success', 'Chamber updated successfully');
            return redirect()->back()->with('success', 'Chamber updated successfully');
        }catch (\Throwable $throwable){
            DB::rollBack();
            Alert::error('Error', 'Chamber invalid data');
            return redirect()->back()->withInput($request->all());
        }
    }
}
