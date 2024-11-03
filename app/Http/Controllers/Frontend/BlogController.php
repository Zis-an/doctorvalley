<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Str;
use Modules\Blog\Services\BlogService;

class BlogController extends Controller
{
    public function __construct(private BlogService $blogService){}

    public function index(): Factory|Application|View
    {
        $blogs = $this->blogService->getAllBlogS();
        $featured_blog = $this->blogService->getFeaturedBlog();
        return view('frontend.blogs', compact('blogs', 'featured_blog'));
    }

    public function blog($id): Factory|Application|View
    {
        $blog = $this->blogService->getBlogById($id);

        // Define metadata for Facebook sharing
        $metadata = [
            'og_url' => request()->fullUrl(),
            'og_type' => 'article',
            'og_title' => $blog->blog_title,
            'og_description' => strip_tags(Str::limit($blog->description, 150)),
            'og_image' => asset('storage/' . $blog->thumb_path),
        ];

        // Track visit by IP address
        $ipAddress = Request::ip();
        $blog->visits()->create([
            'ip_address' => $ipAddress,
        ]);

        return view('frontend.blogDetails', compact('blog', 'metadata'));
    }

}
