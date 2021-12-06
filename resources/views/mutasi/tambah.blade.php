@extends('layout.ceria')

@section('title', 'Dashboard')

@section('content')

 <div class="container">
	<h3 class="text-center">Tambah Pegawai Baru</h3>
    <br/>

	<a href="/mutasi" class="btn btn-warning"> Kembali</a>

	<br/>

	<form action="/mutasi/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-4">IDPegawai</div>
            <div class="col-8">
                <input type="number" name="IDPegawai" required="required"> <br/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">Departemen</div>
            <div class="col-8">
                <input type="text" name="Departemen" required="required"> <br/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">SubDepartemen</div>
            <div class="col-8">
                <input type="text" name="SubDepartemen" required="required"> <br/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">MulaiBertugas</div>
            <div class="col-8">
                <input type="datetime" name="MulaiBertugas" required="required"> <br/>
            </div>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto mt-3">
            <center> <input type="submit" value="Simpan Data"> </center>
         </div>

	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>

@endsection
