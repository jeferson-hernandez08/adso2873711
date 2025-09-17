<?php

namespace App\Exports;

use App\Models\Adoption;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AdoptionsExport implements FromView, WithColumnWidths, WithStyles
{
    public function view(): View
    {
        return view('adoptions.excel', [
            'adoptions' => Adoption::with(['user', 'pet'])->get()
        ]);
    }

    public function columnWidths(): array 
    {
        return [
            'A' => 10,   // ID
            'B' => 25,   // Usuario
            'C' => 25,   // Mascota
            'D' => 20,   // Fecha
            'E' => 15,   // Estado
            'F' => 20,   // Foto Usuario
            'G' => 20,   // Foto Mascota
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 12]],
        ];
    }
}