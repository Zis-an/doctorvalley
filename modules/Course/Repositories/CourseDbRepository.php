<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Course\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Course\Models\Course;
use Modules\Course\Enums\CourseEnum;

class CourseDbRepository
{
    private Course $model;
    public function __construct()
    {
        $this->model=new Course();
    }

    public function getCourseData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeCourseData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getCourseDataById(int $id): object|null
    {
        return DB::table(CourseEnum::DB_TABLE)
            ->where(CourseEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(CourseEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(CourseEnum::ID, $id)
            ->delete();
    }
}
