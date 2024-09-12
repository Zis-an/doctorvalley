<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;
use Modules\Doctor\Http\Requests\DoctorLoginRequest;
use Modules\Doctor\Services\V1\AdminAuthService;

class DoctorAuthController extends Controller
{
    public function __construct(private AdminAuthService $authService)
    {
        $this->middleware('guest:doctor');
    }

    /**
     * Chamber login page
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function loginShowFrom()
    {
        return view('auth.doctor.login');
    }

    /**
     * doctor login attempted
     * @param DoctorLoginRequest $request
     * @return RedirectResponse
     */
    public function login(DoctorLoginRequest $request): RedirectResponse
    {
        try {
            $this->authService->authLogin($request->validated());
            return redirect()->route('doctor.dashboard');
        }catch (UnauthorizedException $exception){
            Util::writeToLog('DOCTOR_ADMIN_LOGIN_ERROR', 'error', $exception->getMessage(), [
                'message'=>$exception->getMessage(),
                'file'=>$exception->getFile(),
                'line'=>$exception->getLine(),
                'request'=>$request->validated(),
                'error'=>$exception,
            ]);
            return redirect()->back()->with('error', 'Username/email and password not match OR your account blocked');
        }catch (\Throwable $throwable){
            Util::writeToLog('DOCTOR_ADMIN_LOGIN_ERROR', 'error', $throwable->getMessage(), [
                'message'=>$throwable->getMessage(),
                'file'=>$throwable->getFile(),
                'line'=>$throwable->getLine(),
                'request'=>$request->validated(),
                'error'=>$throwable,
            ]);
            return redirect()->back()->with('error', 'Username/email and password not match OR your account blocked');
        }
    }
}
