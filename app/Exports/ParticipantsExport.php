<?php

namespace App\Exports;

use App\Model\ListData;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ParticipantsExport implements WithMultipleSheets
{

    use Exportable;

    public function sheets(): array {
        $sheets = [];
        $regions = ListData::distinct('region')->select('region')->get();

        foreach ($regions as $region){
            $regionNum = (int)$region->region;
            $cpList = ListData::where('region',$regionNum)->pluck('code_postal');
            $sheets[] = new ParticipantsPerRegionSheet($cpList,$regionNum);
        }

        return $sheets;
    }

}
