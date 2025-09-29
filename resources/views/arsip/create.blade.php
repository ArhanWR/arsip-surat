@extends('layouts.app')

@section('content')
<h2>Arsip Surat >> Unggah</h2>
<p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
<p>Catatan:</p>
<ul>
    <li>Gunakan file berformat PDF</li>
</ul>

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf

    <div class="form-group">
        <label>Nomor Surat</label>
        <input type="text" name="nomor_surat" required>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Undangan">Undangan</option>
            <option value="Pengumuman">Pengumuman</option>
            <option value="Nota Dinas">Nota Dinas</option>
            <option value="Pemberitahuan">Pemberitahuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" required>
    </div>

    <div class="form-group">
        <label>File Surat (PDF)</label>
        <input type="file" name="file" accept="application/pdf" required>
    </div>

    <div class="form-actions">
        <a href="{{ route('arsip.index') }}" class="button btn-grey"><< Kembali</a>
        <button type="submit" class="btn-grey">Simpan</button>
    </div>
</form>
@endsection