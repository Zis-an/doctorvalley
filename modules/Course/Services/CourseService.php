<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Course\Services;

use Modules\Course\Repositories\CourseDbRepository;
use Exception;

class CourseService
{
    private CourseDbRepository $repository;
    public function __construct()
    {
        $this->repository = new CourseDbRepository();
    }

    public function getCourseList(): mixed
    {
        $result = $this->repository->getCourseData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeCourse(array $formData): mixed
    {
        $result = $this->repository->storeCourseData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getCourseById(int $id): object
    {
        $result = $this->repository->getCourseDataById($id);
        if (empty($result)){
            throw new Exception('Course Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Course update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Course info');
        }
        return $result;
    }
}
