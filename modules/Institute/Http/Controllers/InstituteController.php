<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Institute\Http\Requests\InstituteRequest;
use Modules\Institute\Services\InstituteService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class InstituteController extends Controller
{

    public function __construct(private InstituteService $service)
    {

    }

    public function index(): View|Factory|Application
    {
        try{
            $institutes = $this->service->getInstituteList();
            return view('backoffice.institute.index', compact('institutes'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            $institutes = $this->service->getInstituteList();
            return view('backoffice.institute.index', compact('institutes'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function store(InstituteRequest $request): RedirectResponse
    {
        try {
            $this->service->storeInstitute($request->validated());
            return redirect()->route('backoffice.institute.index')->with('success', 'Institute store successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Institute invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $institutes = $this->service->getInstituteList();
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
            return redirect()->route('backoffice.institute.index')
                ->with('success', 'Institute updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Institute invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backoffice.institute.index')
                ->with('success', 'Institute delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Institute information');
        }
    }

}
