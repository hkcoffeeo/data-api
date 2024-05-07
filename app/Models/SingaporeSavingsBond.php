<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingaporeSavingsBond extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'issue_date' => 'date',
            'maturity_date' => 'date',
            'interest_step_up_years_percentage' => 'array',
            'average_per_annum_return_percentage' => 'array',
        ];
    }
}
