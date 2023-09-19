<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Space_work extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'space_work';


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
        'before_file_name',
        'after_file_name',
        'enable',
        'start_date',
        'end_date',
        'order_number'
    ];

}
