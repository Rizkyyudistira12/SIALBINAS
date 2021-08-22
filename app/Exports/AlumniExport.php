<?php

namespace App\Exports;

use App\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumniExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alumni::all();
    }

    public function map($alumni): array
    {
        return [
            $alumni->nama,
            $alumni->gender,
            $alumni->tmpt_lahir,
            $alumni->tgl_lahir,
            $alumni->no_tlp,
            $alumni->pekerjaan,
            $alumni->alamat,
            $alumni->testimoni,
        ];
    }

    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Nomor Telepon',
            'Pekerjaan',
            'Alamat',
            'Testimoni',
        ];
    }
}
