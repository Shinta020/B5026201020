@extends('layout.ceria')

@section('title', 'Data Mobil')

@section('content')

<div class="container">
	<h3 class="text-center">Detail Mobil</h3>

	<a href="/mobil" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $mo)

        <div class="">
            <div class="col-3"> Kode Mobil </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->kodemobil }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Merk Mobil </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->merkmobil }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Stock Mobil </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->stockmobil }}
            </div>
        </div><br>
        <div class="mt-5">
            <div class="col-3"> Tersedia </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $mo->tersedia }}
            </div>
        </div><br/>
	@endforeach
</div>

@endsection
