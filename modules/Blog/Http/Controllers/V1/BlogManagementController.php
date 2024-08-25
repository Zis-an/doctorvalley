<?php

namespace Modules\Blog\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Modules\Blog\Services\BlogService;
use Modules\Blog\Http\Requests\BlogRequest;
use Illuminate\Contracts\Foundation\Application;

class BlogManagementController extends Controller
{
    public function __construct(private BlogService $service)
    {
    }

    public function index(): View|Factory|Application
    {
        try{
            $blogs = $this->service->getBlogList();
            return view('backoffice.blog.blogList', compact('blogs'));
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function create(): View|Factory|Application
    {
        try{
            return view('backoffice.blog.createUpdateBlog');
        }catch (\Throwable $exception){
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function store(BlogRequest $request): RedirectResponse
    {
        try {
            $this->service->storeBlog($request->validated());
            return redirect()->route('backoffice.blog.index')->with('success', 'Blog stored successfully');
        } catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Blog invalid data')->withInput($request->all());
        }
    }

    public function edit(int $id): Factory|View|Application
    {
        try {
            $blog = $this->service->getBlogById($id);
            return view('backoffice.blog.createUpdateBlog', compact('blog'));
        } catch (\Throwable $throwable){
            return abort(500);
        }
    }

    public function update(BlogRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateData($id, $request->validated());
            return redirect()->route('backoffice.blog.index')
                ->with('success', 'Blog updated successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Blog invalid data')->withInput($request->all());
        }
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $this->service->deleteData($id);
            return redirect()->route('backoffice.blog.index')
                ->with('success', 'Blog deleted successfully');
        }catch (\Throwable $throwable){
            return redirect()->back()->with('error', 'Invalid Blog information');
        }
    }
}
