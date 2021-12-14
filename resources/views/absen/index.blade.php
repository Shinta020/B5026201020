@extends('layout.ceria')

@section('title', 'Data Absen')

@section('content')

<div>
    <div class="container">
	<h3 class="text-center mt-1">Data Absen</h3>
	<a href="/absen/tambah" class="btn btn-secondary" > + Tambah Absen Pegawai Baru</a>
	<br/>
    <div class="container" align="center">
        <p>Cari Absen Berdasarkan Nama Pegawai :</p>
	    <form action="/absen/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
            <input class="form-control btn-primary" type="submit" value="CARI">
	    </form>
    </div>
	<table class="table table-success table-striped mt-3">
		<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

        {{ $absen->links() }}

    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>



@endsection
