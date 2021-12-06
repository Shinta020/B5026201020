@extends('layout.ceria')

@section('title', 'Dashboard')

@section('content')

<div class="container">
    <h3 class="text-center">Tambah Data Pegawai</h3>
    <br/>
	<a href="/absen" class=""> Kembali</a>
	<br/>
	<form action="/absen/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class=" mt-5 ">
            <div class="col-4"> Pegawai : </div>
            <div class="col-4"> <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <br>

        <div class="mt-5 form-group">
            <label for="dtpickerdemo" class="control-label"></label>
                <div class="col-4"> Tanggal :</div>
                <div class="col-sm-8 input-group date" id="dtpickerdemo">
                    <input type="text" class="form-control">
                        <div class="input-group-addon input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                </div>
        </div>

            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
        <div class="mt-3">
        <div class="col-sm-4"> Status : </div>
        <div class="col-8">
            <input type="radio" id="hadir" name="status" value="H">
            <label for="hadir">HADIR</label><br>
            <input type="radio" id="tidak" name="status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label>
        </div>
        </div>
		<div class="d-grid gap-2 col-12 mx-auto mt-3">
            <center> <input type="submit" value="Simpan Data"> </center>
        </div>
	</form>
</div>

@endsection

