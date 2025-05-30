<?php

namespace Database\Seeders;
use App\Models\Adoption;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adop = new Adoption;
        $adop->user_id = 2;  // Lara Croft
        $adop->pet_id  = 2;  // Killer
        $adop->save();

        // Busca, consulta y modifica el estado del pet
        $pet = \App\Models\Pet::find($adop->pet_id);  // Killer
        $pet->status = 1;  // Adopted
        $pet->save();
    }
}
