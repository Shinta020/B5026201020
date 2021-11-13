<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>ETS PWEB</title>

    <style>
       .container{
        align-items: center;
        justify-content: center;
        width: 450px;
        background: rgb(69, 131, 202);
        padding: 30px;
        margin: 50px auto;
        min-height: 50vh;
        color: white;
        font-size: 12px;
       }
       .head {
           font-size: 20px;
       }
       .kirim{
           background-color: rgb(47, 0, 255);
       }
       .reset{
           background-color: green;
       }
    </style>

  </head>
  <body class="bg-secondary">
    <div class="container ">
        <form action="https://classroom.its.ac.id/">
            <p>Shinta Amalia <br> Shinta <br> 5026201020</p>
            <h2 class="head text-center">Form Pendaftaran Kuota Internet</h2>
                <!--Nama Mahasiswa-->
                <div class="row mt-4">
                    <div class="col-4">Nama Mahasiswa </div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <input type="text" class="nama">
                    </div>
                </div>
                <!--NRP Mahasiswa-->
                <div class="row mt-3">
                    <div class="col-4">NRP Mahasiswa </div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <input type="text" class="nrp" required>
                    </div>
                </div>
                <!--Jurusan-->
                <div class="row mt-3">
                    <div class="col-4">Jurusan</div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <select name="" class="jurusan">
                            <option value="0">Pilih Jurusan</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Elektro">Elektro</option>
                            <option value="Informatika">Informatika</option>
                        </select>
                    </div>
                </div>
                <!--Nomor Handphone-->
                <div class="row mt-3">
                    <div class="col-4">Nomor Handphone</div>
                    <div class="col-1">:</div>
                    <div class="col-7">
                        <input type="text" class="noHP" required>
                    </div>
                </div>
                <!--button-->
                <div class="row mt-3">
                    <div class="col-6 button text-center">
                        <button type="submit" class="kirim">Kirim</button>
                    </div>
                    <div class="col-6 button text-center">
                        <button type="reset" class="reset">Reset</button>
                    </div>
                </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".kirim").click(function(){
                var nama = $(".nama").val();
                var pattern = /^[a-zA-Z\s]+$/;
                if(nama.length <= 1){
                    alert ("Nama mahasiswa harus diisi dan tidak boleh hanya 1 huruf");
                    return false;
                }
                if(!nama.match(pattern)){
                    alert ("Nama Mahasiswa harus alphabet")
                    return false;
                }
                var nrp = $(".nrp").val();
                var pattern = /^[0-9]+$/;
                if(nrp.length < 10 || nrp.length > 10){
                    alert ("NRP Mahasiswa harus diisi dan berjumlah 10 angka");
                    return false;
                }
                if(!nrp.match(pattern)){
                    alert ("NRP Mahasiswa harus berupa angka");
                    return false;
                }
                var jurusan = $("select option:selected").val();
                if(jurusan == 0){
                    alert ("Anda harus memilih jurusan");
                    return false;
                }
                var noHP = $(".noHP").val();
                var pattern = /^[0-9]+$/;
                if(noHP.length < 10){
                    alert ("No Handphone harus diisi dan berjumlah minimal 10 angka");
                    return false;
                }
                if(!noHP.match(pattern)){
                    alert ("No Handphone harus berupa angka");
                    return false;
                }
            })
        })
    </script>
  </body>
</html>
