@extends('layout.ceria')

@section('title', 'Data Absen')

@section('content')

<div class="container">

    <h3 class="text-center">Edit Data Pegawai</h3><br/>
	<a href="/absen" class="btn btn-secondary"> Kembali</a><br/>

    @foreach($absen as $p)
        <form action="/absen/update" method="post" class="">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
                <div>
                    <div class="col-sm-4"> Pegawai </div>
                    <div class="col-sm-8" ><select id="IDPegawai" name="IDPegawai" required="required" >
                        @foreach($pegawai as $peg)
                            <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            <br>
            <div class="mt-5 form-group">
                <label for="datetimepicker" class="control-label"></label>
                    <div class="col-4"> Tanggal :</div>
                    <div class="col-sm-8 input-group date" id="datetimepicker">
                        <input type='text' required="required" class="form-control" name="Tanggal" />
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
                <div class="col-4"> Status </div>
                <div class="col-8">
                    <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                    <label for="hadir">HADIR</label><br>
                    <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK HADIR</label><br>
                </div>
            </div>
            <div class="d-grid gap-2 col-12 mx-auto mt-3">
                <center> <input type="submit" value="Simpan Data"> </center>
            </div>
        </form>
    @endforeach
</div>

@endsection
