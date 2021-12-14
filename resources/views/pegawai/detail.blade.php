@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
	<h3 class="text-center">Detail Pegawai</h3>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

        <div class="">
            <div class="col-3"> Nama </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->pegawai_nama }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Jabatan </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->pegawai_jabatan }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Umur </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->pegawai_umur }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Alamat </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->pegawai_alamat }}
            </div>
        </div>
	@endforeach
</div>

@endsection
