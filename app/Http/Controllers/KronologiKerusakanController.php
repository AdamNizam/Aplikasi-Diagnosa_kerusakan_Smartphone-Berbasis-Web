<?php

namespace App\Http\Controllers;

use App\Models\KronologiKerusakan;
use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KronologiKerusakanController extends Controller
{
  
    public function showData() {
        
        $kerusakans = Kerusakan::all();

        return view('tableData', compact('kerusakans'));
    }
    public function show()
    {
        return view('formKronologi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kronologi' => 'required|string',
        ]);

        $kronologi = KronologiKerusakan::create($request->all());

        return redirect()->intended('/form/kronologi')->with('success', 'Data kronologi berhasil disimpan.');
    }
}
