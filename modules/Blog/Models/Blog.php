<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Blog\Enums\BlogEnum;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = BlogEnum::DB_TABLE;
    protected $primaryKey = BlogEnum::ID;
    protected $fillable = BlogEnum::FIELDS;
}
