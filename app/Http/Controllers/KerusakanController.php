<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use App\Models\KronologiKerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class KerusakanController extends Controller
{
    public function index()
    {
        $kronologis = KronologiKerusakan::with('kerusakan')->get();
        
        return view('halamanUtama', compact('kronologis'));
    }
    
    public function show(){
        return view('formKerusakan');
    }
    public function showIdKronologi()
    {
        $kronologi = KronologiKerusakan::all();
        return view('formKerusakan', compact('kronologi'));
    }
 
    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'nama_kerusakan' => 'required|string|max:255',
                'keterangan' => 'required|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'harga' => 'required',
                'kronologi_id' => 'required|exists:kronologi_kerusakan,id'
            ]);

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $path = $file->store('public/images');
                $validatedData['gambar'] = $path;
            }

            Kerusakan::create($validatedData);

            return redirect()->back()->with('success', 'Data kerusakan berhasil ditambahkan!');

        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    } 
    public function destroy($id){

        $kerusakan = Kerusakan::findOrFail($id);

        $kerusakan->delete(); 

        return redirect()->back()->with('success', 'Delete Succesfully');
    }
    public function update(Request $request, $id)
    {
        $kerusakan = Kerusakan::findOrFail($id);

        $request->validate([
            'nama_kerusakan' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'harga' => 'required|string',
            'kronologi_id' => 'required|exists:kronologi_kerusakan,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kerusakan->nama_kerusakan = $request->nama_kerusakan;
        $kerusakan->keterangan = $request->keterangan;
        $kerusakan->harga = $request->harga;
        $kerusakan->kronologi_id = $request->kronologi_id;

        if ($request->hasFile('gambar')) {

            if ($kerusakan->gambar) {
                Storage::delete($kerusakan->gambar);
            }
            // Store new image
            $kerusakan->gambar = $request->file('gambar')->store('gambar');
        }

        $kerusakan->save();

        return redirect()->back()->with('success', 'Update Successfully');
    }

}
