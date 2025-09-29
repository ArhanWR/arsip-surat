@extends('layouts.app')

@section('content')
<h2>Arsip Surat >> Lihat</h2>
<p><strong>Nomor:</strong> {{ $arsip->nomor_surat }}</p>
<p><strong>Kategori:</strong> {{ $arsip->kategori }}</p>
<p><strong>Judul:</strong> {{ $arsip->judul }}</p>
<p><strong>Waktu Unggah:</strong> {{ $arsip->created_at }}</p>

<iframe src="{{ asset('storage/' . $arsip->file) }}" width="100%" height="400px"></iframe>

<div class="mt-3">
    <a href="{{ route('arsip.index') }}" class="btn btn-secondary button btn-grey"><< Kembali</a>
    <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-primary button btn-grey" download>Unduh</a>
    <a href="#" class="button btn-grey">Edit/Ganti File</a>
</div>
@endsection