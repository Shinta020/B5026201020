@extends('layout.ceria')

@section('title', 'Data Mobil')

@section('content')

<div>
    <div class="container">
	<h3 class="text-center mt-1">Data Mobil</h3>
	<a href="/mobil/tambah" class="btn btn-secondary" > + Tambah Data Mobil</a>
	<br/>
    <div class="container" align="center">
        <p>Temukan mobil berdasarkan merk :</p>
	    <form action="/mobil/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Mobil .." value="{{ old('cari') }}">
            <input class="form-control btn-primary" type="submit" value="CARI">
	    </form>
    </div>
	<table class="table table-success table-striped mt-3">
		<tr>
			<th>Kode Mobil</th>
			<th>Merk Mobil</th>
			{{-- <th>Stock Mobil</th>
			<th>Tersedia</th> --}}
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $mo)
		<tr>
			<td>{{ $mo->kodemobil }}</td>
			<td>{{ $mo->merkmobil }}</td>
			{{--<td>{{ $mo->stockmobil }}</td>
			<td>{{ $mo->tersedia }}</td>--}}
			<td>
                <a href="/mobil/detail/{{ $mo->kodemobil }}" class="btn btn-info" >View Detail</a>
				<a href="/mobil/edit/{{ $mo->kodemobil }}" class="btn btn-warning" >Edit</a>
				<a href="/mobil/hapus/{{ $mo->kodemobil }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

        {{ $mobil->links() }}

    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>



@endsection
