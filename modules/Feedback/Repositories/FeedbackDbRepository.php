<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Feedback\Models\Feedback;
use Modules\Feedback\Enums\FeedbackEnum;

class FeedbackDbRepository
{
    private Feedback $model;
    public function __construct()
    {
        $this->model=new Feedback();
    }

    public function getFeedbackData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function getFeedbackDataByDoctorId($id): mixed
    {
        return $this->model
            ->where('feedbackable_id', $id)
            ->latest()
            ->get();
    }

    public function storeFeedbackData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getFeedbackDataById(int $id): object|null
    {
        return DB::table(FeedbackEnum::DB_TABLE)
            ->where(FeedbackEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(FeedbackEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(FeedbackEnum::ID, $id)
            ->delete();
    }
}
