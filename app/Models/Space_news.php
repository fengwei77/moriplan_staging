<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Space_news extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'space_news';

    public $sortable = [
        'order_column_name' => 'order_number',
        'sort_when_creating' => true,
    ];

    protected $fallible = [
        'article_date',
        'title',
        'content',
        'file_name',
        'url',
        'open_blank',
        'alt_txt',
        'title_txt',
        'file_name',
        'enable',
        'start_date',
        'end_date',
        'order_number'
    ];
}
