<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Enums;

class FeedbackEnum
{
    public const DB_TABLE='feedbacks';

    public const ID='id';
    public const FEEDBACK_TYPE='type';
    public const FEEDBACK_TEXT = 'feedback';
    public const FEEDBACKABLE_CLASS='feedbackable_class';
    public const FEEDBACKABLE_ID='feedbackable_id';

    public const FIELDS =[
        self::ID,
        self::FEEDBACK_TYPE,
        self::FEEDBACK_TEXT,
        self::FEEDBACKABLE_CLASS,
        self::FEEDBACKABLE_ID
    ];
}
