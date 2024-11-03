<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Location\Http\Requests\CountryRequest;
use Modules\Location\Services\CountryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class CountryController extends Controller
{

    public function __construct(private CountryService $service)
    {
    }

    /**
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        try{
            $countries = $this->service->getCountryList($request->all());
            // return view('bcscommon::location.country.index', compact('countries'));
            return view('backoffice.location.country.index', compact('countries'));
        }catch (\Throwable $exception){
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
            Alert::success('Success', 'Country stored successfully');
            return redirect()->route('backoffice.country.index')->with('success', 'Country stored successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Something Wrong! Country data not stored');
            return redirect()->back()->with('error', 'Something Wrong! Country data not stored')->withInput($request->all());
        }
    }


    /**
     * @param int $id
     * @return Factory|View|Application
     */
    public function edit(Request $request, int $id): Factory|View|Application
    {
        try{
            $countries = $this->service->getCountryList($request->all());
            $country = $this->service->getCountryById($id);
            // return view('bcscommon::location.country.index', compact('countries'));
            return view('backoffice.location.country.index', compact('countries', 'country'));
        }catch (\Throwable $exception){
            abort(500);
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
            Alert::success('Success', 'Country updated successfully');
            return redirect()->route('backoffice.country.index')
                ->with('success', 'Country updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Country invalid data');
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
            Alert::success('Success', 'Country delete successfully');
            return redirect()->route('backoffice.country.index')
                ->with('success', 'Country delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid country information');
            return redirect()->back()->with('error', 'Invalid country information');
        }
    }
}
