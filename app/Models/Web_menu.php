<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Web_menu extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'web_menu';

    public $sortable = [
        'order_column_name' => 'order_number',
        'sort_when_creating' => true,
    ];
    protected $fillable = [
        'position',
        'title',
        'alt_txt',
        'url',
        'action',
        'lang',
        'enable',
        'start_date',
        'end_date',
     ];
}
