<?php

namespace Modules\ChamberAdmin\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\ChamberAdmin\Http\Requests\ChamberAdminPasswordRequest;
use Modules\ChamberAdmin\Http\Requests\ChamberAdminRequest;
use Modules\ChamberAdmin\Services\ChamberAdminService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Chamber\Services\ChamberService;
use Modules\Location\Services\ProvinceService;
use Illuminate\Contracts\Foundation\Application;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\Chamber\Http\Requests\ChamberRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberAdminProfileController extends Controller
{
    public function __construct(private ChamberAdminService $service,
                                private ChamberService $chamberService)
    {
    }

    public function chamberAdminProfile(Request $request,int $id): Factory|View|Application
    {
        try {
            $chamberAdmin = $this->service->getChamberAdminById($id);
            $chambers = $this->chamberService->getChamberList($request->all());
            return view('chamber.chamberAdminProfile', compact('chamberAdmin', 'chambers'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function chamberAdminProfileUpdate(ChamberAdminRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Chamber Admin Profile updated successfully');
            return redirect()->back()->with('success', 'Chamber Admin Profile updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Chamber Admin Profile invalid data');
            return redirect()->back()->with('error', 'Chamber Admin invalid data')->withInput($request->all());
        }
    }


    public function chamberAdminPassword(): Factory|View|Application
    {
        try {
            return view('chamber.chamberAdminPassword');
        } catch (\Throwable $throwable){
            abort(500);
        }
    }

    public function chamberAdminPasswordUpdate(ChamberAdminPasswordRequest $request): RedirectResponse
    {
        try {
            $chamberAdmin = $this->service->getChamberAdminByIdAndChamberId($request->id, $request->chamber_id);
            if (empty($chamberAdmin)) {
                Alert::error('Error', 'Chamber Admin not found');
                return redirect()->back()->with('error', 'Chamber Admin not found')->withInput($request->all());
            }

            $this->service->updateChamberAdminPassword($request->validated());

            Alert::success('Success', 'Chamber Admin password updated successfully');
            return redirect()->back()->with('success', 'Chamber Admin password updated successfully');

        } catch (\Exception $exception) {
            Alert::error('Error', $exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage())->withInput($request->all());
        } catch (\Throwable $throwable) {
            // Handle unexpected errors
            return redirect()->back()->with('error', 'An unexpected error occurred')->withInput($request->all());
        }
    }

}
