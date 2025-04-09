<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Models;

use Modules\ChamberAdmin\Models\ChamberAdmin;
use Modules\Doctor\Models\Doctor;
use Modules\Feedback\Enums\FeedbackEnum;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes;

    protected $table=FeedbackEnum::DB_TABLE;
    protected $primaryKey=FeedbackEnum::ID;
    protected $fillable=FeedbackEnum::FIELDS;

//    public function doctor()
//    {
//        return $this->belongsTo(Doctor::class, 'feedbackable_id');
//    }

    public function feedbackable()
    {
        if ($this->feedbackable_class === 'doctor') {
            return $this->belongsTo(Doctor::class, 'feedbackable_id');
        } elseif ($this->feedbackable_class === 'chamber') {
            return $this->belongsTo(ChamberAdmin::class, 'feedbackable_id');
        }

        return null; // Handle case where `feedbackable_class` is not doctor or chamber
    }

}
