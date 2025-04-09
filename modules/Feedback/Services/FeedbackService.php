<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Services;

use Illuminate\Support\Facades\Auth;
use Modules\Feedback\Repositories\FeedbackDbRepository;
use Exception;

class FeedbackService
{
    private FeedbackDbRepository $repository;
    public function __construct()
    {
        $this->repository = new FeedbackDbRepository();
    }

    public function getFeedbackList(): mixed
    {
        $result = $this->repository->getFeedbackData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function getFeedbackListByDoctorId($id): mixed
    {
        $result = $this->repository->getFeedbackDataByDoctorId($id);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeFeedback(array $formData): mixed
    {
        if (Auth::guard('doctor')->check()) {
            $formData['feedbackable_id'] = auth()->guard('doctor')->user()->id;
            $formData['feedbackable_class'] = 'doctor';
        } else if(Auth::guard('chamber')->check()) {
            $formData['feedbackable_id'] = auth()->guard('chamber')->user()->id;
            $formData['feedbackable_class'] = 'chamber';
        } else {
            $formData['feedbackable_class'] = 'guest';
        }

        if ($formData['type'] === 'frontend') {
            // Prepare the feedback message
            $feedbackMessage = [];

            // Format name
            $feedbackMessage[] = 'Name: ' . (!empty($formData['name']) ? $formData['name'] : 'Not Provided');
            $feedbackMessage[] = 'Email: ' . (!empty($formData['email']) ? $formData['email'] : 'Not Provided');
            $feedbackMessage[] = 'Phone: ' . (!empty($formData['phone']) ? $formData['phone'] : 'Not Provided');
            $feedbackMessage[] = 'Feedback: ' . (!empty($formData['feedback']) ? $formData['feedback'] : 'Not Provided');

            // Join the formatted message with new lines and spaces
            $formData['feedback'] = implode("\n\n", $feedbackMessage);
        }

        $result = $this->repository->storeFeedbackData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getFeedbackById(int $id): object
    {
        $result = $this->repository->getFeedbackDataById($id);
        if (empty($result)){
            throw new Exception('Feedback Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Feedback update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Feedback info');
        }
        return $result;
    }
}
