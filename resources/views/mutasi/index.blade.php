<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Pemrograman WEB - Membuat CRUD Data Mutasi</title>

    <style>
        .container{
            padding: 50px;
            background: rgb(216, 248, 246);
            margin: 50px auto;
        }
    </style>
</head>
<body>
<div class="container">
	<h2 class="text-center">Pemrograman WEB</h2>
	<h3 class="text-center">Data Mutasi</h3>

	<a href="/mutasi/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-info">
		<tr>
            <th>ID</th>
			<th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->ID }}</td>
			<td>{{ $m->IDPegawai }}</td>
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
</div>
</body>
</html>
