@extends('layout.ceria')

@section('title', 'Data Mutasi')

@section('content')

<div class="container" >
	<h3 class="text-center">Data Mutasi</h3>
	<a href="/mutasi/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>
	<br/>
    <div class="container" align="center">
        <p>Cari Mutasi Berdasarkan ID Pegawai :</p>
	    <form action="/mutasi/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Mutasi .." value="{{ old('cari') }}">
            <input class="form-control btn-warning" type="submit" value="CARI">
	    </form>
    </div>
	<table class="table table-info mt-3">
		<tr>
            <th>ID</th>
			<th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->ID }}</td>
			<td>{{ $m->pegawai_nama }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-primary">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{ $mutasi->links() }}

</div>

@endsection
