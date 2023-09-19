<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space_info extends Model
{
    use HasFactory;
    protected $table = 'space_info';

    protected $fallible = [
        'article_date',
        'title',
        'description'
    ];
}
