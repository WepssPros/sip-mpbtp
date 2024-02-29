<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerkara;
use App\Models\Hakim;
use App\Models\Jaksa;
use App\Models\KategoriTindakPidana;
use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.perkara.index',);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hakims = Hakim::all();
        $kategoris = KategoriTindakPidana::all();
        $jaksas = Jaksa::all();
        $catatans = CatatanPerkara::all();
        return view('pages.perkara.create', [
            'hakims' => $hakims,
            'kategoris' => $kategoris,
            'jaksas' => $jaksas,
            'catatans' => $catatans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
