<?php

namespace Modules\ChamberAdmin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\UnauthorizedException;
use Modules\ChamberAdmin\Http\Requests\LoginRequest;
use Modules\ChamberAdmin\Services\V1\ChamberAdminAuthService;

class AuthController extends Controller
{

    public function __construct(private ChamberAdminAuthService $authService)
    {
        $this->middleware('guest:chamber');
    }

    /**
     * Chamber login page
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function loginShowFrom()
    {
        return view('auth.chamber.login');
    }

    /**
     * chamber login attempted
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {

        try {
            $this->authService->authLogin($request->validated());
            return redirect()->route('chamber.dashboard');
        }catch (UnauthorizedException $exception){
            Util::writeToLog('CHAMBER_ADMIN_LOGIN_ERROR', 'error', $exception->getMessage(), [
                'message'=>$exception->getMessage(),
                'file'=>$exception->getFile(),
                'line'=>$exception->getLine(),
                'request'=>$request->validated(),
                'error'=>$exception,
            ]);
            return redirect()->back()->with('error', 'Username/email and password not match OR your account blocked');
        }catch (\Throwable $throwable){
            Util::writeToLog('CHAMBER_ADMIN_LOGIN_ERROR', 'error', $throwable->getMessage(), [
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
