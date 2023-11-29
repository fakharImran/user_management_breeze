<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id','name', 'dob',
        'email','telephone', 'relation',
        'age','passport_photo', 'illness',
        'address','recommended_source', 'recommended_source_address'
    ];
}
