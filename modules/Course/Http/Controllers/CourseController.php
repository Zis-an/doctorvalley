<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Course\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Course\Http\Requests\CourseRequest;
use Modules\Course\Models\Course;
use Modules\Course\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{

    public function __construct(private CourseService $service)
    {

    }

    public function index(Request $request): View|Factory|Application
    {
        try{
            $courses = $this->service->getCourseList($request->all());
            return view('backoffice.course.index', compact('courses'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(Request $request): View|Factory|Application
    {
        try{
            $courses = $this->service->getCourseList($request->all());
            return view('backoffice.course.index', compact('courses'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(CourseRequest $request): RedirectResponse
    {
        try {
            $this->service->storeCourse($request->validated());
            Alert::success('Success', 'Course store successfully');
            return redirect()->route('backoffice.course.index')->with('success', 'Course store successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Course invalid data');
            return redirect()->back()->with('error', 'Course invalid data')->withInput($request->all());
        }
    }

    public function edit(Request $request, int $id): Factory|View|Application
    {
        try {
            $courses = $this->service->getCourseList($request->all());
            $course = $this->service->getCourseById($id);

            return view('backoffice.course.index',
                compact('courses','course')
            );
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(CourseRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Course updated successfully');
            return redirect()->route('backoffice.course.index')
                ->with('success', 'Course updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Course invalid data');
            return redirect()->back()->with('error', 'Course invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Course delete successfully');
            return redirect()->route('backoffice.course.index')
                ->with('success', 'Course delete successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Course invalid data');
            return redirect()->back()->with('error', 'Invalid Course information');
        }
    }

}
