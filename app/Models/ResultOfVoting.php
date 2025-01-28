<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultOfVoting extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_serial',
        'candidate_counter'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_serial', 'candidate_serial');
    }
}
