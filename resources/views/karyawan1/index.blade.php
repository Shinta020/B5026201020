@extends('layout.ceria')

@section('title', 'Data Karyawan')

@section('content')

<div class="container">
	<h3 class="text-center">Data Karyawan</h3>
    <a href="/karyawan1/tambah" class="btn btn-secondary"> + Tambah Karyawan Baru</a>
	<br/>

	<table border="1" class="table table-primary mt-3">
		<tr>
            <th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
			<th>Opsi</th>
		</tr>

		@foreach($karyawan1 as $k)

		<tr>
            <td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ number_format ($k->Gaji) }}</td>
			<td>
				<a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
