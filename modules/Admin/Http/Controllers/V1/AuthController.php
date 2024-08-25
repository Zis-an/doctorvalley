<?php

namespace Modules\Admin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\UnauthorizedException;
use Modules\Admin\Http\Requests\AdminLoginRequest;
use Modules\Admin\Services\V1\AdminAuthService;

class AuthController extends Controller
{

    public function __construct(private AdminAuthService $authService)
    {
        $this->middleware('guest:admin');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function loginShowFrom(): Factory|View|\Illuminate\Foundation\Application|Application
    {
        return view('auth.admin.login');
    }

    /**
     * @param AdminLoginRequest $request
     * @return RedirectResponse
     */
    public function login(AdminLoginRequest $request): RedirectResponse
    {
        try {
            $this->authService->authLogin($request->validated());
            return redirect()->route('backoffice.dashboard');
        }catch (UnauthorizedException $exception){
            Util::writeToLog('ADMIN_LOGIN_ERROR', 'error', $exception->getMessage(), [
                'message'=>$exception->getMessage(),
                'file'=>$exception->getFile(),
                'line'=>$exception->getLine(),
                'request'=>$request->validated(),
                'error'=>$exception,
            ]);
            return redirect()->back()->with('error', 'Username/email and password not match OR your account blocked');
        }catch (\Throwable $throwable){
            Util::writeToLog('ADMIN_LOGIN_ERROR', 'error', $throwable->getMessage(), [
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
