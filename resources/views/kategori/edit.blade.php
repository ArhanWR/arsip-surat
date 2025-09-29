@extends('layouts.app')

@section('content')
<h2>Kategori Surat >> {{ isset($kategori) ? 'Edit' : 'Tambah' }}</h2>
<p>Tambahkan atau edit data kategori. Jika sudah selesai, jangan lupa untuk mengklik tombol "Simpan"</p>

<form action="{{ isset($kategori) ? route('kategori.update', $kategori->id) : route('kategori.store') }}" method="POST" class="form-container">
    @csrf
    @if(isset($kategori))
        @method('PUT')
    @endif

    <div class="form-group">
        <label>ID (Auto Increment)</label>
        <input type="text" value="{{ $kategori->id ?? 'Auto' }}" disabled>
    </div>

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori ?? '' }}" required>
    </div>

    <div class="form-group">
        <label>Judul</label>
        <textarea name="keterangan">{{ $kategori->keterangan ?? '' }}</textarea>
    </div>

    <div class="form-actions">
        <a href="{{ route('kategori.index') }}" class="button btn-grey"><< Kembali</a>
        <button type="submit" class="btn-grey">Simpan</button>
    </div>
</form>
@endsection