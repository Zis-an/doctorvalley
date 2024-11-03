<?php

namespace Modules\Blog\Repositories;

use Modules\Blog\Models\Blog;
use Modules\Blog\Enums\BlogEnum;
use Illuminate\Support\Facades\DB;

class BlogDBRepository
{

    private Blog $model;
    public function __construct()
    {
        $this->model = new Blog();
    }

    public function getBlogData(): mixed
    {
        return $this->model
            ->with('authorable') // Eager load the authorable relationship
            ->whereNull('deleted_at')
            ->latest()
            ->paginate(5);
    }

    public function storeBlogData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getBlogDataById(int $id): object|null
    {
//        return DB::table(BlogEnum::DB_TABLE)
//            ->where(BlogEnum::ID, $id)
//            ->first();
        return $this->model
            ->with('authorable') // Eager load the authorable relationship
            ->whereNull('deleted_at')
            ->where(BlogEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(BlogEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(BlogEnum::ID, $id)
            ->delete();
    }

    public function getAllBlogData()
    {
        return $this->model
            ->whereNull('deleted_at')
            ->latest()
            ->get();
    }

    public function setBlogAsFeatured(int $id): mixed
    {
        // Unset any currently featured blog (excluding soft-deleted ones)
        $this->model->where('featured_blog', true)
            ->whereNull('deleted_at') // Ensure we are not touching soft-deleted blogs
            ->update(['featured_blog' => false]);

        // Set the current blog as featured (also ensure it is not soft-deleted)
        return $this->model->where(BlogEnum::ID, $id)
            ->whereNull('deleted_at') // Ensure this blog is not soft-deleted
            ->update(['featured_blog' => true]);
    }

    public function getFeaturedBlogData()
    {
        return $this->model
            ->whereNull('deleted_at')
            ->where('featured_blog', true)
            ->first();
    }
}
