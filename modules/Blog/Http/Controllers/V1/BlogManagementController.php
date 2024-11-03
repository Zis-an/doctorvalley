<?php

namespace Modules\Blog\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Modules\Blog\Services\BlogService;
use Modules\Blog\Http\Requests\BlogRequest;
use Illuminate\Contracts\Foundation\Application;
use RealRashid\SweetAlert\Facades\Alert;

class BlogManagementController extends Controller
{
    public function __construct(private BlogService $service) {}

    public function index(): View|Factory|Application
    {
        try{
            $blogs = $this->service->getBlogList();
            return view('backoffice.blog.blogList', compact('blogs'));
        }catch (\Throwable $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function create(): View|Factory|Application
    {
        try {
            return view('backoffice.blog.createUpdateBlog');
        } catch (\Throwable $exception){
            abort(500);
        }
    }

    public function store(BlogRequest $request): RedirectResponse
    {
        try {
            $this->service->storeBlog($request->validated());
            Alert::success('Success', 'Blog stored successfully');
            return redirect()->route('blog.index')->with('success', 'Blog stored successfully');
        } catch (\Throwable $throwable){
            Alert::error('Error', 'Blog invalid data');
            return redirect()->back()->with('error', 'Blog invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $blog = $this->service->getBlogById($id);
            return view('backoffice.blog.createUpdateBlog', compact('blog'));
        } catch (\Throwable $throwable){
            Alert::error('Error', 'Blog invalid data');
            return redirect()->back()->with('error', 'Blog invalid data');
        }
    }

    public function update(BlogRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            Alert::success('Success', 'Blog updated successfully');
            return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Blog invalid data');
            return redirect()->back()->with('error', 'Blog invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            Alert::success('Success', 'Blog deleted successfully');
            return redirect()->route('blog.index')->with('success', 'Blog deleted successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Invalid Blog information');
            return redirect()->back()->with('error', 'Invalid Blog information');
        }
    }

    public function details(int $id): Factory|View|Application
    {
        try {
            $blog = $this->service->getBlogById($id);
            return view('backoffice.blog.blogDetails', compact('blog'));
        }catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function featureBlog($id)
    {
        try {
            // Call the service to set this blog as the featured one
            $this->service->setFeaturedBlog($id);

            // Return back to the blog list with success message
            return redirect()->back()->with('success', 'Blog set as featured successfully.');
        } catch (\Throwable $exception) {
            // Handle error and return with error message
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }
}
