<?php

namespace App\Exports;

use App\Models\Formperwada;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerwadaExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formperwada::all();
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
            $perwada->tempat_tinggal,
            $perwada->no_hp,
        ];
    }
}
