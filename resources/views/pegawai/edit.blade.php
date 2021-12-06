@extends('layout.ceria')

@section('title', 'Dashboard')

@section('content')

<div class="container">
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="table table-success">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="">
            <div class="col-4"> Nama </div>
            <div class="col-8">
                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Jabatan </div>
            <div class="col-8">
                <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Umur </div>
            <div class="col-8">
                <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Alamat </div>
            <div class="col-8">
                <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
</div>

@endsection
