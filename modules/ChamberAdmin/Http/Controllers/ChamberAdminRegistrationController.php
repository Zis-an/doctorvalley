<?php

namespace Modules\ChamberAdmin\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Modules\Chamber\Services\ChamberService;
use Modules\ChamberAdmin\Http\Requests\ChamberAdminRegistrationRequest;
use Modules\ChamberAdmin\Services\ChamberAdminRegistrationService;
use Modules\ChamberAdmin\Services\ChamberAdminService;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberAdminRegistrationController extends Controller
{
    private ChamberAdminRegistrationService $chamberAdminRegistrationService;

    public function __construct()
    {
        $this->chamberAdminRegistrationService = new ChamberAdminRegistrationService();
    }

    public function registrationFrom(): Factory|View|Application
    {
        return view('auth.chamber.registration');
    }

    public function registration(ChamberAdminRegistrationRequest $request): RedirectResponse
    {
        try{
            $this->chamberAdminRegistrationService->registration($request->validated());
            Alert::success('Success', 'Chamber Admin Registered Successfully. Login Please..');
            return redirect()->route('chamber.login')->with('success', 'Chamber Admin Registered Successfully. Login Please..');
        }catch (\Throwable $exception) {
            Alert::error('Error', 'Something went wrong');
            return redirect()->back()->with('error', 'Something went wrong')->withInput();
        }
    }

}
