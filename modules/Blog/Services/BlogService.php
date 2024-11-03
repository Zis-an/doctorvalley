<?php

namespace Modules\Blog\Services;

use BCS\Uploader\V1\Services\UploaderService;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Repositories\BlogDBRepository;
use Exception;
use Throwable;

class BlogService
{

    private BlogDBRepository $repository;
    private UploaderService $uploaderService;

    public function __construct()
    {
        $this->repository = new BlogDBRepository();
        $this->uploaderService = new UploaderService();
    }

    public function getBlogList(): mixed
    {
        $result = $this->repository->getBlogData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    /**
     * @throws Exception
     */
    public function storeBlog(array $formData): mixed
    {
        // Convert tags array to a comma-separated string
        if (!empty($formData['tags']) && is_array($formData['tags'])) {
            $formData['tags'] = implode(',', $formData['tags']);
        }

        if (!empty($formData['thumb_path'])) {
            $imageData = $this->singleUpload($formData['thumb_path']);
            $formData['thumb_path'] = $imageData['fullPath'];
        }

        $result = Auth::user()->blogs()->create($formData);
        if (empty($result)) {
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
        // Convert tags array to a comma-separated string
        if (!empty($formData['tags']) && is_array($formData['tags'])) {
            $formData['tags'] = implode(',', $formData['tags']);
        }

        if (!empty($formData['thumb_path'])) {
            $imageData = $this->singleUpload($formData['thumb_path']);
            $formData['thumb_path'] = $imageData['fullPath'];
        }

        $result = $this->repository->update($formData, $id);
        if (empty($result)) {
            throw new Exception('Invalid data format');
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

    private function singleUpload($file): \Throwable|Exception|array
    {
        $uploadResponse = $this->uploaderService
            ->setUploadPath('/blog_images/')
            ->setFileSystem('public')
            ->upload($file);
        if ($uploadResponse instanceof Throwable){
            throw new Exception($uploadResponse->getMessage());
        }
        return $uploadResponse;
    }

    public function getAllBlogs(): mixed
    {
        $result = $this->repository->getAllBlogData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function setFeaturedBlog($id)
    {
        // Fetch the blog you want to set as featured
        $blog = $this->repository->getBlogDataById($id);

        // Check if the blog exists
        if (!$blog) {
            throw new \Exception('Blog not found');
        }

        // Call the repository method to handle unsetting any previous featured blog
        $this->repository->setBlogAsFeatured($id);
    }

    public function getFeaturedBlog()
    {
        $result = $this->repository->getFeaturedBlogData();
        if(empty($result)){
            return [];
        }
        return $result;
    }

}
