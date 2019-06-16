<?php

namespace App\Exports;

use App\Model\Participant;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class ParticipantsPerRegionSheet implements FromQuery,WithHeadings,ShouldAutoSize,WithStrictNullComparison,WithMapping,WithEvents,WithTitle
{
    private $codePostalList;
    private $region;

    public function __construct($codePostalList, $region){
        $this->codePostalList = $codePostalList;
        $this->region = $region;
    }

    public function query(){
        return Participant::query()->whereIn('cp', $this->codePostalList);
    }

    public function headings(): array{
        return [
            'ID',
            'Civilité',
            'Nom',
            'Prenom',
            'Date naissance',
            'Email',
            'Téléphone',
            'Adresse',
            'Code postal',
            'Ville',
            'Réparateur AD',
            'No facure ou code jeu',
            'Date facture',
            'Date création',
        ];
    }

    public function map($row): array{
        return [
            $row->id,
            $row->civilite ? 'M.' : 'Mme.',
            $row->nom,
            $row->prenom,
            $row->date_naissance,
            $row->email,
            $row->tele,
            $row->adresse,
            $row->cp,
            $row->ville,
            $row->reparateur_ad,
            $row->no_facture_code_jeu,
            $row->date_facture,
            $row->created_at,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:N1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            },
        ];
    }

    public function title(): string {
        return 'Région ' . $this->region;
    }

}
