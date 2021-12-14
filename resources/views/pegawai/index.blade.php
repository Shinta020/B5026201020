@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
	<h3 class="text-center">Data Pegawai</h3>
	<a href="/pegawai/tambah" class="btn btn-secondary"> + Tambah Pegawai Baru</a>
	<br/>
	<div class="container" align="center">
        <p>Cari Data Pegawai Berdasarkan Nama :</p>
	    <form action="/pegawai/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input class="form-control btn-success" type="submit" value="CARI">
	    </form>
    </div>
	<table border="1" class="table table-primary mt-3">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<!--<th>Jabatan</th>
			<th>Umur</th>-->
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>

		@foreach($pegawai as $p)

		<tr>
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
			<!--<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> -->
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info">View Detail</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

</div>

@endsection
