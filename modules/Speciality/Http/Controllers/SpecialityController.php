<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Speciality\Http\Requests\SpecialityRequest;
use Modules\Speciality\Models\Speciality;
use Modules\Speciality\Services\SpecialityService;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SpecialityController extends Controller
{

    public function __construct(private SpecialityService $service)
    {

    }

    public function index(): View|Factory|Application
    {
        try{
            $specialities = $this->service->getSpecialityList();
            return view('backoffice.speciality.index', compact('specialities'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            $specialities = $this->service->getSpecialityList();
            return view('backoffice.speciality.index', compact('specialities'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function store(SpecialityRequest $request): RedirectResponse
    {
        try {
            $this->service->storeSpeciality($request->validated());
            return redirect()->route('backoffice.speciality.index')->with('success', 'Speciality store successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Speciality invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $specialities = $this->service->getSpecialityList();
            $speciality = $this->service->getSpecialityById($id);

            return view('backoffice.speciality.index',
                compact('specialities','speciality')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(SpecialityRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('backoffice.speciality.index')
                ->with('success', 'Speciality updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Speciality invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backoffice.speciality.index')
                ->with('success', 'Speciality delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Speciality information');
        }
    }

}
