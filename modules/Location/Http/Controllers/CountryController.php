<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Location\Http\Requests\CountryRequest;
use Modules\Location\Services\CountryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class CountryController extends Controller
{

    public function __construct(private CountryService $service)
    {
    }

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        try{
            $countries = $this->service->getCountryList();
            // return view('bcscommon::location.country.index', compact('countries'));
            return view('backoffice.location.country.index', compact('countries'));
        } catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }


    /**
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('backoffice.location.country.index');
    }


    /**
     * @param CountryRequest $request
     * @return RedirectResponse
     */
    public function store(CountryRequest $request): RedirectResponse
    {
        try {
            $this->service->storeCountry($request->validated());
            return redirect()->route('backoffice.country.index')->with('success', 'Country stored successfully');
        }catch (\Throwable $throwable){
            Log::error($throwable->getMessage());
            return redirect()->back()->with('error', 'Something Wrong! Country data not stored')->withInput($request->all());
        }
    }


    /**
     * @param int $id
     * @return Factory|View|Application
     */
    public function edit(int $id): Factory|View|Application
    {
        try {
            $country = $this->service->getCountryById($id);
            return \view('bcscommon::location.country.createUpdate', compact('country'));
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }


    /**
     * @param CountryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CountryRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('backend.common.country.index')
                ->with('success', 'Country updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Country invalid data')->withInput($request->all());
        }
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backend.common.country.index')
                ->with('success', 'Country delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid country information');
        }
    }
}
