<?php

namespace Modules\ChamberAdmin\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Modules\Chamber\Services\ChamberService;
use Modules\ChamberAdmin\Http\Requests\ChamberAdminRequest;
use Modules\ChamberAdmin\Services\ChamberAdminService;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberAdminManagementController extends Controller
{
    // private ChamberService $service;

    // public function __construct()
    // {
    //     $this->service = new ChamberService();
    // }

    public function __construct(private ChamberAdminService $service,
                                private ChamberService $chamberService)
    {

    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $chamberAdmins = $this->service->getChamberAdminList($request->all());
            return view('backoffice.chamberAdmin.chamberAdminList', compact('chamberAdmins'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {
        try{
            $chambers = $this->chamberService->getChamberList($request->all());
            return view('backoffice.chamberAdmin.createUpdateChamberAdmin', compact('chambers'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function store(ChamberAdminRequest $request): RedirectResponse
    {
        try {
            $this->service->storeChamberAdmin($request->validated());
            Alert::success('Success', 'Chamber Admin stored successfully');
            return redirect()->route('backoffice.chamber.admin.index')->with('success', 'Chamber Admin stored successfully');
        } catch (\Throwable $throwable){
            dd($throwable->getMessage());
            Alert::error('Error', 'Chamber Admin invalid data');
            return redirect()->back()->with('error', 'Chamber Admin invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $chamberAdmin = $this->service->getChamberAdminById($id);
            $chambers = $this->chamberService->getChamberList($request->all());
            return view('backoffice.chamberAdmin.createUpdateChamberAdmin', compact('chamberAdmin', 'chambers'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(ChamberAdminRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Chamber Admin updated successfully');
            return redirect()->route('backoffice.chamber.admin.index')
                ->with('success', 'Chamber Admin updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Chamber Admin invalid data');
            return redirect()->back()->with('error', 'Chamber Admin invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Chamber Admin deleted successfully');
            return redirect()->route('backoffice.chamber.admin.index')
                ->with('success', 'Chamber Admin deleted successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid Chamber Admin information');
            return redirect()->back()->with('error', 'Invalid Chamber Admin information');
        }
    }
}
