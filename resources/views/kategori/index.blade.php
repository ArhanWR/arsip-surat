@extends('layouts.app')

@section('content')
<h2>Kategori Surat</h2>
<p>Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.</p>
<p>Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</p>

<!-- Form Cari -->
 <form method="GET" action="{{ route('kategori.index') }}" class="form-group">
    <label>Cari kategori:</label>
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="search">
    <button type="submit" class="btn-grey">Cari!</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($kategori as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama_kategori }}</td>
            <td>{{ $k->keterangan }}</td>
            <td>
                <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn-red">Hapus</button>
                </form>
                <a href="{{ route('kategori.edit', $k->id) }}" class="button btn-blue">Edit</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center;">Tidak ada kategori ditemukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<a href="{{ route('kategori.create') }}" class="button btn-green" style="margin-top: 15px; display:inline-block;">
    [ + ] Tambah Kategori Baru
</a>
@endsection
