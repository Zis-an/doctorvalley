<?php

namespace Modules\Admin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Modules\Admin\Http\Requests\AdminPasswordUpdateRequest;
use Modules\Admin\Http\Requests\AdminProfileUpdateRequest;
use Modules\Admin\Services\V1\AdminProfileService;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    private AdminProfileService $adminProfileService;

    public function __construct()
    {
        $this->adminProfileService = new AdminProfileService();
    }

    public function index()
    {
        return view('backoffice.dashboard');
    }

    public function profile(int $adminId): Factory|View|Application
    {
        try {
            $admin = $this->adminProfileService->getAdminById($adminId);
            return view('backoffice.admin-profile', compact('admin'));
        } catch (\Throwable $throwable){
            dd($throwable);
            return abort(500);
        }
    }

    public function profileUpdate(AdminProfileUpdateRequest $request, int $adminId): RedirectResponse
    {
        try {
            $this->adminProfileService->updateProfileData($request->validated(), $adminId);
            Alert::success('Success', ' Admin Profile updated successfully');
            return redirect()->back()->with('success', ' Admin Profile updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', ' Admin Profile invalid data');
            return redirect()->back()->with('error', ' Admin invalid data')->withInput($request->all());
        }
    }

    public function notification()
    {
        return view('backoffice.notifications');
    }

    public function password(): Factory|View|Application
    {
        try{
            return view('backoffice.admin-password');
        }catch(\Throwable $throwable){
            abort(500);
        }
    }

    public function passwordUpdate(AdminPasswordUpdateRequest $request): RedirectResponse
    {
        try {
            $admin = $this->adminProfileService->getAdminById($request->id);
            if (empty($admin)) {
                Alert::error('Error', 'Admin Info not found');
                return redirect()->back()->with('error', 'AdminInfo not found')->withInput($request->all());
            }

            $this->adminProfileService->updateAdminPassword($request->validated());

            Alert::success('Success', 'Admin password updated successfully');
            return redirect()->back()->with('success', 'Admin password updated successfully');

        } catch (\Exception $exception) {
            Alert::error('Error', $exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage())->withInput($request->all());
        } catch (\Throwable $throwable) {
            // Handle unexpected errors
            return redirect()->back()->with('error', 'An unexpected error occurred')->withInput($request->all());
        }
    }




}
