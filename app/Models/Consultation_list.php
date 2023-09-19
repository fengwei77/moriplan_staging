<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation_list extends Model
{
    use HasFactory;

    protected $table = 'consultation_list';

    protected $fallible = [
        'username',
        'tel',
        'mobile',
        'email',
        'title',
        'message',
        'enable',
    ];
}
