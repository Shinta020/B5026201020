<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan HTML, PHP, dan CSS3</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .kalkulator{
        align-items: center;
            justify-content: center;
            width: 300px;
            background: #b67015;
            padding: 30px;
            border-radius: 10px;
            margin: 50px auto;
            box-shadow: 0px 10px 20px 0px #D1D1D1;
    }
    .bil{
            width: 200px;
            margin: 10px;
            border: none;
            font-size: 16pt;
            border-radius: 5px;
            padding: 10px;
            float: right;
            border: 1;
    }
    body{
            background-image: url(https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1608727323/z40zvzp2wx4qahvfe8ro.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
    }
    .tombol{
            background: #3f372d;
            border-top: none;
            border-right: none;
            border-left: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #eee;
            font-size: 15pt;
            border-bottom:4px solid #BF3D3D;
    }
    .judul{
            text-align: center;
            color: #eee;
            font-weight: normal;
    }
    .col{
        margin: 0px auto;
    }

</style>

</head>
<body>
	<div class="kalkulator">
		<h3 class="judul">Kalkulator Perhitungan Tabung</h3>
		<form method="post" action="result">
            @csrf
            <div class="col row mt-3">
			    <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="jari-jari tabung" required>
            </div>
            <div class="col row mt-3 text-center">
                <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="tinggi tabung" required>
            </div>
            <div class="col row mt-3">
                <select class="opt" name="operasi" required>
                    <option value="0">Please Select Category</option>
                    <option value="luas selimut tabung">Luas Selimut Tabung</option>
                    <option value="luas permukaan tabung">Luas Permukaan Tabung</option>
                    <option value="volume tabung">Volume Tabung</option>
                </select>
            </div>
            <div class="button text-center mt-3">
			    <button type="submit" name="hitung" value="Hitung" class="tombol"> Hitung </button>
            </div>
		</form>
	</div>
</body>
</html>
