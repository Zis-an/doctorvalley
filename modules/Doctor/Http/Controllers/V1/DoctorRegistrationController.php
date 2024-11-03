<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory;
use Modules\Doctor\Http\Requests\DoctorRegistrationRequest;
use Modules\Doctor\Services\DoctorRegistrationService;
use Modules\Doctor\Services\DoctorService;
use RealRashid\SweetAlert\Facades\Alert;


class DoctorRegistrationController extends Controller
{
    private DoctorRegistrationService $doctorRegistrationService;

    public function __construct()
    {
        $this->doctorRegistrationService = new DoctorRegistrationService();
    }

    public function registrationForm(): View|Factory|Application
    {
        return view('auth.doctor.registration');
    }

    public function registration(DoctorRegistrationRequest $request): RedirectResponse
    {
        try{
            $this->doctorRegistrationService->doctorRegistration($request->validated());
            Alert::success('Success', 'Registered successfully.. Login Please..');
            return redirect()->route('doctor.login')->with('success', 'Registered successfully.. Login Please..');
        }catch(\Throwable $exception) {
            Alert::error('Error', 'Something went wrong');
            return redirect()->back()->with('error', 'Something went wrong')->withInput();
        }
    }

}
