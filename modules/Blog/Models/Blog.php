<?php

namespace Modules\Blog\Models;

use App\Models\VisitorCount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Models\Admin;
use Modules\Blog\Enums\BlogEnum;
use Modules\Doctor\Models\Doctor;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = BlogEnum::DB_TABLE;
    protected $primaryKey = BlogEnum::ID;
    protected $fillable = BlogEnum::FIELDS;

    public function authorable()
    {
        return $this->morphTo();
    }

    public function setAsFeatured()
    {
        // Unset all other featured blogs
        self::where('featured_blog', true)->update(['featured_blog' => false]);

        // Set the current blog as featured
        $this->update(['featured_blog' => true]);
    }

    public function visits()
    {
        return $this->morphMany(VisitorCount::class, 'ownarable');
    }
}
