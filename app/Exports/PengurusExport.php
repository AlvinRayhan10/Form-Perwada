<?php

namespace App\Exports;

use App\Models\Formpengurus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengurusExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formpengurus::all();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Alamat',
            'No HP',
        ];
    }

    public function map($perwada): array
    {
        return [
            $perwada->nama,
            $perwada->alamat,
            $perwada->no_hp,
        ];
    }
}
