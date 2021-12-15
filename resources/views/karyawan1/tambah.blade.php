@extends('layout.ceria')

@section('title', 'Data Karyawan')

@section('content')

<div class="container">
	<h3 class="text-center">Data Karyawan</h3>

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class="">
            <div class="col-4"> NIP </div>
            <div class="col-8">
                <input type="number" name="NIP" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Nama </div>
            <div class="col-8">
                <input type="text" name="Nama" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Pangkat </div>
            <div class="col-8">
                <input type="text" name="Pangkat" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Gaji </div>
            <div class="col-8">
                <input type="number" name="Gaji" required="required"> <br/>
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
</div>
@endsection
