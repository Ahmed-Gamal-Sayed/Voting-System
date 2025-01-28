<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_name',
        'candidate_icon',
        'candidate_serial',
        'candidate_photo',
        'candidate_description'
    ];
}
