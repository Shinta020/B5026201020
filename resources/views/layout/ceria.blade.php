<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title') PWEB</title>

    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/sufee-master/assets/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<style>
    .header-menu {
        background: rgb(26, 26, 26);
    }
    .jarak {
        height: 900px;
    }
    .font {
        font-size: small;
    }
    .formea {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 500px;
        background: rgb(144, 179, 130);
        padding: 15px;
        margin: 10px auto;
        min-height: 80vh;
        color: white;
    }
</style>

</head>

<body >
<div class="container">
        <!-- Menu Bar -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" >My Task</a>
                    <a class="navbar-brand hidden">M</a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/pegawai"> <i class="menu-icon fa fa-dashboard"></i>Tugas Pegawai</a>
                        </li>
                        <li>
                            <a href="/mutasi"> <i class="menu-icon fa fa-dashboard"></i>Tugas Mutasi</a>
                        </li>
                        <li>
                            <a href="/absen"> <i class="menu-icon fa fa-dashboard"></i>Tugas Absen </a>
                        </li>
                        <li>
                            <a href=""> <i class="menu-icon fa fa-dashboard"></i>Tugas Minggu Depan </a>
                        </li>
                        <li>
                            <a href=""> <i class="menu-icon fa fa-dashboard"></i>Praktikum</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </aside>

        <div id="right-panel" class="right-panel">

        <!-- Header -->
        <header id="header" class="header mb-4 ">
            <div class="header-menu ">
                <div class="row">
                    <div class="col-1 ml-3 mt-3">
                        <img class="rounded-circle" src="/ceria/fotoNew.jpg" alt="Logo"></a>
                    </div>
                    <div class="col-10 mt-3">
                        <h5 class="m-b-10 text-white">Shinta Amalia | 5026201020</h5>
                        <p class="m-b-0 ">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                </div>
            </div><hr>
        </header>

        <!-- Content -->
        <div class="jarak">
            @section("content")
            @show
        </div>

        <!-- Footer -->
        <div>
            <footer class="footer">
                <div class="font mt-6 text-center" style="background-color: rgba(0, 0, 0, 0.05);" >
                    Hak Cipta Oleh: <a>Shinta Amalia - 5026201020</a>
                </div>
            </footer>
        </div>
    </div>
</div>

    <script src="{{ asset('style/sufee-mastervendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('style/sufee-mastervendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('style/sufee-mastervendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/sufee-masterassets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <script>
        $(function () {
            $.extend(true, $.fn.datetimepicker.defaults, {
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({format : "YYYY/MM/DD hh:mm", "defaultDate":new Date() });
        });
    </script>
</body>
</html>
