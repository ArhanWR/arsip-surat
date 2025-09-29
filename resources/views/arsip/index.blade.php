@extends('layouts.app')

@section('content')
<h2>Arsip Surat</h2>
<p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
<p>Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>

<form method="GET" class="form-group" action="{{ route('arsip.index') }}">
    <label>Cari surat:</label>
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="search">
    <button type="submit" class="btn-grey">Cari!</button>
</form>

<table border="1" cellpadding="5">
    <tr>
        <th>Nomor Surat</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Waktu Pengarsipan</th>
        <th>Aksi</th>
    </tr>
    @foreach($surat as $s)
    <tr>
        <td>{{ $s->nomor_surat }}</td>
        <td>{{ $s->kategori }}</td>
        <td>{{ $s->judul }}</td>
        <td>{{ $s->created_at }}</td>
        <td>
            <form action="{{ route('arsip.destroy', $s->id) }}" method="POST" style="display:inline" 
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-red">Hapus</button>
            </form>
            <a href="{{ route('arsip.download', $s->id) }}" class="button btn-yellow">Unduh</a>
            <a href="{{ route('arsip.show', $s->id) }}" class="button btn-blue">Lihat >></a>
        </td>
    </tr>
    @endforeach
</table>

<form method="GET" action="{{ route('arsip.create') }}" style="margin-top: 15px; display:inline-block;">
    <button type="submit" class="btn-grey">Arsipkan Surat..</button>
</form>

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection