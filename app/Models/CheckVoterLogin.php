<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckVoterLogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'voter_national_number',
        'voter_voting_date'
    ];

    public function voter()
    {
        return $this->belongsTo(Voter::class, 'voter_national_number', 'voter_national_number');
    }
}
