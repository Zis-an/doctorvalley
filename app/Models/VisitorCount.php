<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorCount extends Model
{
    protected $fillable = ['ip_address', 'ownarable_id', 'ownarable_type'];

    protected $table = 'visitor_count';

    public function ownarable()
    {
        return $this->morphTo();
    }
}
