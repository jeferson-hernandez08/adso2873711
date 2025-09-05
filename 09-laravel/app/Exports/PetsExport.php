<?php

namespace App\Exports;

use App\Models\Pet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PetsExport implements FromView, WithColumnWidths, WithStyles
{
    public function view(): View
    {
        return view('pets.excel', [
            'pets' => Pet::all()
        ]);
    }

    public function columnWidths(): array 
    {
        // Se ajustan los anchos de las columnas según lo que necesitemos
        return [
            'A' => 5,   // ID
            'B' => 20,  // Name
            'C' => 15,  // Kind
            'D' => 10,  // Weight
            'E' => 10,  // Age
            'F' => 20,  // Breed
            'G' => 30,  // Location
            'H' => 40,  // Description
            'I' => 15,  // Status
            'J' => 15,  // Active
            'K' => 20,  // Photo
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Estilo para la primera fila (encabezados)
            1 => ['font' => ['bold' => true, 'size' => 12]],
            // También podemos dar estilo a otras filas si es necesario
        ];
    }
}