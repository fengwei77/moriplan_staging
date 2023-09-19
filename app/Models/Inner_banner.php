<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Inner_banner extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'inner_banners';

    public $sortable = [
        'order_column_name' => 'order_number',
        'sort_when_creating' => true,
    ];

    protected $fallible = [
        'position',
        'title',
        'url',
        'alt_txt',
        'title_txt',
        'file_name',
        'file_name_p',
        'file_name_m',
        'enable',
        'start_date',
        'end_date',
        'order_number'
    ];
}
