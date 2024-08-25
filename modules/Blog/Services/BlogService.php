<?php

namespace Modules\Blog\Services;

use Modules\Blog\Models\Blog;
use Modules\Blog\Repositories\BlogDBRepository;
use Exception;

class BlogService
{

    private BlogDBRepository $repository;

    public function __construct()
    {
        $this->repository = new BlogDBRepository();
    }

    public function getBlogList(): mixed
    {
        $result = $this->repository->getBlogData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeBlog(array $formData): mixed
    {
        if(!empty($formData['thumb_path'])) {
            $image = $formData['thumb_path'];
            $filename = time() . '.'. $image->getClientOriginalName();
            $path = public_path(). '/blog_images/';
            $image->move($path, $filename);
            $formData['thumb_path'] = $filename;
        }
        $result = $this->repository->storeBlogData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getBlogById(int $id): object
    {
        $result = $this->repository->getBlogDataById($id);
        if (empty($result)){
            throw new Exception('Blog Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        if(!empty($formData['thumb_path'])) {
            $image = $formData['thumb_path'];
            $filename = time() . '.'. $image->getClientOriginalName();
            $path = public_path(). '/test_images/';
            $image->move($path, $filename);
            $formData['thumb_path'] = $filename;
        }
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Blog update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Blog info');
        }
        return $result;
    }
}
