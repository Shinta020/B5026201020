@extends('layout.ceria')

@section('title', 'Dashboard')

@section('content')

<div class="container">
	<h3 class="text-center">Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-secondary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-primary">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>

		@foreach($pegawai as $p)

		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
