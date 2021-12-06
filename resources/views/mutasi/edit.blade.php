@extends('layout.ceria')

@section('title', 'Dashboard')

@section('content')

<div class="container">
<div class="formea" >
@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post" class="rounded">
            <h3 class="text-center">Edit Data Pegawai</h3><br>
        <br/>
        <br/>
            <a href="/mutasi" class="btn btn-outline-warning"> Kembali</a>
        <br/>
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $m->ID }}"> <br/>
        <div class="row mt-2">
            <div class="col-4 ">IDPegawai</div>
            <div class="col-7">
                <input type="number" name="IDPegawai" required="required" value="{{ $m->IDPegawai }}"> <br/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4 ">Departemen</div>
            <div class="col-7">
                <input type="text" name="Departemen" required="required" value="{{ $m->Departemen }}"> <br/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4 ">SubDepartemen</div>
            <div class="col-7">
                <input type="text" name="SubDepartemen" required="required" value="{{ $m->SubDepartemen }}"> <br/>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4 ">MulaiBertugas</div>
            <div class="col-7">
                <input type="datetime-local" name="MulaiBertugas" required="required" value="{{ $m->MulaiBertugas }}"> <br/>
            </div>
        </div>
        <div class="row d-grid gap-2 col-12 mx-auto mt-4">
            <center> <input type="submit" value="Simpan Data"> </center>
        </div>

	</form>
	@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</div>
@endsection
