<?php

namespace App\Console\Commands;

use App\Models\SingaporeSavingsBond;
use Illuminate\Console\Command;

class LoadSingaporeSavingsBonds extends Command
{
    protected $signature = 'app:load-singapore-savings-bonds {filepath}';

    protected $description = 'Load singapore savings bonds data from csv downloaded from MAS website.';

    public function handle()
    {
        $file = fopen($this->argument('filepath'), 'r');

        $keysToCollect = ['Issue Code:', 'ISIN Code:', 'Issue Date*:', 'Coupon Dates*:', 'Maturity Date*:', 'Interest,%', 'Average p.a. return,%**'];

        $cleanData = collect();

        while ($row = fgetcsv($file)) {
            if (in_array($row[0], $keysToCollect)) {
                $cleanData->add($row);
            }
        }

        $bond = null;
        while ($cleanData->count() > 0) {
            $data = collect($cleanData->shift());
            if ($data[0] === 'Issue Code:') {
                $bond = SingaporeSavingsBond::where('issue_code', $data[1])->first();
                if (!$bond) {
                    $bond = new SingaporeSavingsBond();
                }
                $bond->issue_code = $data[1];
            }
            if ($data[0] === 'ISIN Code:') {
                $bond->isin_code = $data[1];
            }
            if ($data[0] === 'Issue Date*:') {
                $bond->issue_date = $data[1];
            }
            if ($data[0] === 'Maturity Date*:') {
                $bond->maturity_date = $data[1];
            }
            if ($data[0] === 'Interest,%') {
                $data->shift(); // remove the name and keep the rest as array
                $bond->interest_step_up_years_percentage = $data;
            }
            if ($data[0] === 'Average p.a. return,%**') {
                $data->shift(); // remove the name and keep the rest as array
                $bond->average_per_annum_return_percentage = $data;
                $bond->save(); // last item in array, so we save it
            }
        }

        fclose($file);
    }
}
