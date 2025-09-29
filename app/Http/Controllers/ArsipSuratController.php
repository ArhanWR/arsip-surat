<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipSurat;
use App\Models\Arsip;
use Illuminate\Support\Facades\Storage;

class ArsipSuratController extends Controller
{
    // Halaman utama
    public function index(Request $request)
    {
        $search = $request->input('search');
        $surat = ArsipSurat::when($search, function($query, $search) {
            return $query->where('judul', 'like', "%$search%");
        })->get();

        return view('arsip.index', compact('surat', 'search'));
    }
    public function show($id)
    {
        $arsip = ArsipSurat::findOrFail($id);
        return view('arsip.show', compact('arsip'));
    }

    // Form tambah
    public function create()
    {
        return view('arsip.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|unique:arsip_surat,nomor_surat',
            'kategori' => 'required',
            'judul' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file')->store('arsip', 'public');

        ArsipSurat::create([
            'nomor_surat' => $request->nomor_surat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'file' => $path,
        ]);

        return redirect()->route('arsip.index')->with('success', 'Data berhasil disimpan');
    }

    // Hapus data
    public function destroy($id)
    {
        $surat = ArsipSurat::findOrFail($id);
        Storage::disk('public')->delete($surat->file);
        $surat->delete();

        return redirect()->route('arsip.index')->with('success', 'Data berhasil dihapus');
    }

    // Unduh file
    public function download($id)
    {
        $surat = ArsipSurat::findOrFail($id);
        // Ambil file path sesuai dengan path di database
        $filePath = storage_path('app/public/' . $surat->file);
        // Buat nama file sesuai judul surat + ekstensi asli
        $namaFile = preg_replace('/[^A-Za-z0-9_\-]/', '_', $surat->judul) . '.' . pathinfo($surat->file, PATHINFO_EXTENSION);
        return response()->download($filePath, $namaFile);
    }
}