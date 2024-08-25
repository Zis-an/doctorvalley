<?php

namespace Modules\Blog\Enums;

class BlogEnum
{
    public const DB_TABLE = 'blogs';

    public const ID = 'id';
    public const BLOG_TITLE = 'blog_title';
    public const BLOG_THUMB = 'thumb_path';
    public const BLOG_DESC = 'description';

    // public const BLOG_TAGS = 'blog_tags';
    // public const BLOG_AUTHOR = 'authorable';
    // public const BLOG_VIEW = 'view';
    // public const BLOG_SHARE = 'share';
    // public const BLOG_META = 'meta_keys';
    // public const BLOG_META_DESC = 'meta_description';

    public const BLOG_STATUS = 'status';

    public const FIELDS = [
        self::ID,
        self::BLOG_TITLE,
        self::BLOG_THUMB,
        self::BLOG_DESC,
        self::BLOG_DESC,
        self::BLOG_STATUS
    ];

}
