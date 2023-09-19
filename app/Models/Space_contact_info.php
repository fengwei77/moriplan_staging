<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space_contact_info extends Model
{
    use HasFactory;

    protected $table = 'space_contact_info';


    protected $fallible = [
        'address',
        'tel',
        'fax',
        'email',
        'open_date',
        'open_time',
        'file_name',
        'fb_link',
        'ig_link',
        'line_link',
        'enable'
    ];
}
