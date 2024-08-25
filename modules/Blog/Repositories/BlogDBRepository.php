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
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeBlogData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getBlogDataById(int $id): object|null
    {
        return DB::table(BlogEnum::DB_TABLE)
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
}
