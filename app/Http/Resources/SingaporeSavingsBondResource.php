<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SingaporeSavingsBondResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'issue_code' => $this->issue_code,
            'isin_code' => $this->isin_code,
            'issue_date' => $this->issue_date,
            'maturity_date' => $this->maturity_date,
            'interest_step_up_years_percentage' => $this->interest_step_up_years_percentage,
            'average_per_annum_return_percentage' => $this->average_per_annum_return_percentage,
        ];
    }
}
