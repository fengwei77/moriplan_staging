<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Banner extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'banners';

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

//    public static function grid($callback)
//    {
//        return new Grid(new static, $callback);
//    }
//
//    public static function form($callback)
//    {
//        return new Form(new static, $callback);
//    }

}
