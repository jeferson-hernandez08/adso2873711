<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdoptionsExport;
use App\Imports\PetImport;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adopts = Adoption::paginate(20);
        return view('adoptions.index')->with('adopts', $adopts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adoption $adoption)
    {
        return view('adoptions.show')->with('adopt', $adoption);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $adoption)
    {
        //
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $adopts = Adoption::with(['user', 'pet'])
            ->whereHas('user', function($query) use ($q) {
                $query->where('fullname', 'LIKE', '%'.$q.'%')
                    ->orWhere('email', 'LIKE', '%'.$q.'%')
                    ->orWhere('document', 'LIKE', '%'.$q.'%');
            })
            ->orWhereHas('pet', function($query) use ($q) {
                $query->where('name', 'LIKE', '%'.$q.'%')
                    ->orWhere('kind', 'LIKE', '%'.$q.'%')
                    ->orWhere('breed', 'LIKE', '%'.$q.'%');
            })
            ->paginate(20);

        return view('adoptions.search', compact('adopts'));
    }

    public function pdf()
    {
        $adoptions = Adoption::with(['user', 'pet'])->get();  
        $pdf = PDF::loadView('adoptions.pdf', compact('adoptions'));
        return $pdf->download('alladoptions.pdf');
    }

    public function excel()
    {
        return Excel::download(new AdoptionsExport, 'alladoptions.xlsx');
    }


}
