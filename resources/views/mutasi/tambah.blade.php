<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Pemrograman WEB - Membuat CRUD Mata Mutasi</title>

    <style>
        .container {
        align-items: center;
        justify-content: center;
        color: white;
        background: rgb(67, 189, 179);
        width: 500px;
        padding: 50px;
        margin: 50px auto;
        min-height: 100vh;
        }
    </style>
</head>
<body>
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
        <div class="button text-center row mt-3">
            <input type="submit" value="Simpan Data">
        </div>

	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
</body>
</html>
