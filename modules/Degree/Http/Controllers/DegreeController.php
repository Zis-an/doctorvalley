<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Degree\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Degree\Http\Requests\DegreeRequest;
use Modules\Degree\Models\Degree;
use Modules\Degree\Services\DegreeService;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class DegreeController extends Controller
{

    public function __construct(private DegreeService $service)
    {

    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $degrees = $this->service->getDegreeList($request->all());
            return view('backoffice.degree.index', compact('degrees'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {
        try{
            $degrees = $this->service->getDegreeList($request->all());
            return view('backoffice.degree.index', compact('degrees'));
        }catch (\Throwable $exception){
            dd($exception);
            abort(500);
        }
    }

    public function store(DegreeRequest $request): RedirectResponse
    {
        try {
            $this->service->storeDegree($request->validated());
            Alert::success('Success', 'Degree store successfully');
            return redirect()->route('backoffice.degree.index')->with('success', 'Degree store successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Degree invalid data');
            return redirect()->back()->with('error', 'Degree invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $degrees = $this->service->getDegreeList($request->all());
            $degree = $this->service->getDegreeById($id);

            return view('backoffice.degree.index',
                compact('degrees','degree')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(DegreeRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Degree updated successfully');
            return redirect()->route('backoffice.degree.index')
                ->with('success', 'Degree updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Degree invalid data');
            return redirect()->back()->with('error', 'Degree invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Degree delete successfully');
            return redirect()->route('backoffice.degree.index')
                ->with('success', 'Degree delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Degree invalid data');
            return redirect()->back()->with('error', 'Invalid Degree information');
        }
    }

}
