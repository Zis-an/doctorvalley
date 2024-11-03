<?php

namespace Modules\Blog\Enums;

class BlogEnum
{
    public const DB_TABLE = 'blogs';

    public const ID = 'id';
    public const BLOG_TITLE = 'blog_title';
    public const BLOG_THUMB = 'thumb_path';
    public const BLOG_DESC = 'description';
    public const BLOG_TAGS = 'tags';
    public const BLOG_AUTHOR = 'authorable_id';
    public const BLOG_AUTHOR_TYPE = 'authorable_class';
    public const BLOG_TOTAL_VIEW = 'total_view';
    public const BLOG_TOTAL_SHARE = 'total_share';
    public const BLOG_META_KEYS = 'meta_keys';
    public const BLOG_META_DESC = 'meta_description';
    public const BLOG_STATUS = 'status';
    public const FEATURED_BLOG = 'featured_blog';

    public const FIELDS = [
        self::ID,
        self::BLOG_TITLE,
        self::BLOG_THUMB,
        self::BLOG_DESC,
        self::BLOG_TAGS,
        self::BLOG_AUTHOR,
        self::BLOG_AUTHOR_TYPE,
        self::BLOG_TOTAL_VIEW,
        self::BLOG_TOTAL_SHARE,
        self::BLOG_META_KEYS,
        self::BLOG_META_DESC,
        self::BLOG_STATUS,
        self::FEATURED_BLOG,
    ];

}
