@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
	<h3 class="text-center">Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class="">
            <div class="col-4"> Nama </div>
            <div class="col-8">
                <input type="text" name="nama" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Jabatan </div>
            <div class="col-8">
                <input type="text" name="jabatan" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Umur </div>
            <div class="col-8">
                <input type="number" name="umur" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Alamat </div>
            <div class="col-8">
                <textarea name="alamat" required="required"></textarea> <br/>
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
</div>
@endsection
