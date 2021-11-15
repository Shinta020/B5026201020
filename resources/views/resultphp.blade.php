<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>

    .kalkulator{
            align-items: center;
            justify-content: center;
            width: 400px;
            background: #b67015;
            padding: 30px;
            border-radius: 10px;
            margin: 50px auto;
            box-shadow: 0px 10px 20px 0px #D1D1D1;
    }
    .bil{
            width: 200px;
            margin: 5px;
            border: none;
            font-size: 16pt;
            border-radius: 5px;
            padding: 10px;
            float: right;
            border: 1;
    }
    .opt{
            font-size: 16pt;
            border: none;
            width: 215px;
            margin: 5px;
            border-radius: 5px;
            padding: 10px;
    }
    .body{
            background-image: url(https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1608727323/z40zvzp2wx4qahvfe8ro.jpg);
            background-repeat: no-repeat;
            background-size: cover;
    }

</style>

<body class="body">
<?php
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'luas selimut tabung':
				$hasil = 2*3.14*$bil1*$bil2;
			break;
			case 'luas permukaan tabung':
				$hasil = 2*3.14*$bil1*($bil1+$bil2);
			break;
			case 'volume tabung':
				$hasil = 3.14*$bil1*$bil1*$bil2;
			break;
		}
	}
?>
        <div class="kalkulator">
            <h3 class="text-center">Hasil Perhitungan</h3>
            <div class="row">
                <div class="input col-5">
                    <input type="text" value=" jari-jari tabung = <?php echo $bil1 ?>">
                </div>
                <div class="input col-7">
                    <input type="text" value=" tinggi tabung = <?php echo $bil2 ?>">
                </div>
            </div>
            <h4 class="text-center mt-3"> <?php echo $operasi ?> </h4>
            <div class="hasil row mt-3">
                <div class="col-10"><?php if(isset($_POST['hitung'])){ ?>
                    <input type="text" value="<?php echo $hasil; ?>" class="bil text-center">
                    <?php }else{ ?>
                        <input type="text" value="0" class="bil">
                        <?php } ?>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </body>
</html>
