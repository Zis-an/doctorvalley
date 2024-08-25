<?php

namespace Modules\ChamberAdmin\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Modules\Chamber\Services\ChamberService;
use Modules\ChamberAdmin\Http\Requests\ChamberAdminRequest;
use Modules\ChamberAdmin\Services\ChamberAdminService;

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

    public function index(): View|Factory|Application
    {
        try{
            $chamberAdmins = $this->service->getChamberAdminList();
            return view('backoffice.chamberAdmin.chamberAdminList', compact('chamberAdmins'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            $chambers = $this->chamberService->getChamberList();
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
            return redirect()->route('backoffice.chamber.admin.index')->with('success', 'Chamber Admin stored successfully');
        } catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Chamber Admin invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $chamberAdmin = $this->service->getChamberAdminById($id);
            $chambers = $this->chamberService->getChamberList();
            return view('backoffice.chamberAdmin.createUpdateChamberAdmin', compact('chamberAdmin', 'chambers'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(ChamberAdminRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('backoffice.chamber.admin.index')
                ->with('success', 'Chamber Admin updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Chamber Admin invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backoffice.chamber.admin.index')
                ->with('success', 'Chamber Admin deleted successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Chamber Admin information');
        }
    }
}
