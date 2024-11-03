<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Feedback\Http\Requests\FeedbackRequest;
use Modules\Feedback\Services\FeedbackService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{

    public function __construct(private FeedbackService $service)
    {
    }

    public function index(): View|Factory|Application
    {
        try{
            $feedbacks = $this->service->getFeedbackList();

            if (auth('admin')->check()) {
                // Admin can see all feedbacks
                $feedbacks = $this->service->getFeedbackList();
            } elseif (auth('doctor')->check()) {
                // Doctor can see only their own feedbacks
                $doctorId = auth('doctor')->id();
                $feedbacks = $this->service->getFeedbackListByDoctorId($doctorId);
            }
            return view('backoffice.feedback', compact('feedbacks'));
        }catch (\Throwable $exception){
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try {
            return view('doctor.feedback');
        } catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(FeedbackRequest $request): RedirectResponse
    {
        try {
            $this->service->storeFeedback($request->validated());
            return redirect()->route('feedback.index')->with('success', 'Feedback stored successfully');
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->with('error', 'Feedback invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $feedback = $this->service->getFeedbackById($id);
            return view('backoffice.course.index', compact('feedback'));
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(FeedbackRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Feedback invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('feedback.index')->with('success', 'Feedback delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Feedback information');
        }
    }

    public function showDoctorsFeedbacks(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('feedback.index')->with('success', 'Feedback delete successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Feedback information');
        }
    }
}
