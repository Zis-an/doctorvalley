<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Institute\Http\Requests\InstituteRequest;
use Modules\Institute\Services\InstituteService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class InstituteController extends Controller
{

    public function __construct(private InstituteService $service)
    {

    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $institutes = $this->service->getInstituteList($request->all());
            return view('backoffice.institute.index', compact('institutes'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {
        try{
            $institutes = $this->service->getInstituteList($request->all());
            return view('backoffice.institute.index', compact('institutes'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(InstituteRequest $request): RedirectResponse
    {
        try {
            $this->service->storeInstitute($request->validated());
            Alert::success('Success', 'Institute store successfully');
            return redirect()->route('backoffice.institute.index')->with('success', 'Institute store successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Institute invalid data');
            return redirect()->back()->with('error', 'Institute invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $institutes = $this->service->getInstituteList($request->all());
            $institute = $this->service->getInstituteById($id);

            return view('backoffice.institute.index',
                compact('institutes','institute')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(InstituteRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Institute updated successfully');
            return redirect()->route('backoffice.institute.index')
                ->with('success', 'Institute updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Institute invalid data');
            return redirect()->back()->with('error', 'Institute invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Institute delete successfully');
            return redirect()->route('backoffice.institute.index')
                ->with('success', 'Institute delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid Institute information');
            return redirect()->back()->with('error', 'Invalid Institute information');
        }
    }

}
