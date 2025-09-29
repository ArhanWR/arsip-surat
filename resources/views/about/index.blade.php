@extends('layouts.app')

@section('content')
<h2>About</h2>

<div class="about-container">
    <img src="{{ asset('images\foto.jpg') }}" alt="Foto Saya" 
         class="img-thumbnail mt-3 mb-3"
         style="width: fit-content; border:5px solid; height: 200px; object-fit: contain; background-color: white;">

    <div class="about-info"><strong>
        <p>Aplikasi ini dibuat oleh:</p>
        <p>Nama: Arhan Windu Rizki Putra Budianto</p>
        <P>Prodi: D4-TI Politeknik Negeri Malang</P>
        <p>NIM: 2141720227</p>
        <p>Tanggal: {{ date('d-m-Y', strtotime('2025-09-27')) }}</p></strong>
    </div>
</div>

@endsection