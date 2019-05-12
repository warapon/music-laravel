<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap-4.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/dev/css/simple-sidebar.css" rel="stylesheet">

    <title>major7aug</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">

    <link href="/css/bootstrap3_player.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Athiti', sans-serif;
        }

        @media only screen and (min-width: 767px) {
            .show-large {
                display: block;
            }
            .show-mobile {
                display: none;
            }
        }

        /* Make the image fully responsive */

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        /* .border {
            display: inline-block;
        } */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg">
        {{-- <button class="show-mobile btn btn-primary" id="menu-toggle">หมวดหมู่</button> --}}
        <button class="show-mobile btn btn-primary" data-toggle="modal" data-target="#myModal">หมวดหมู่</button>
        <a class="navbar-brand" href="#">
                <img class="header_logo" src="/images/logo/logomajor.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
            aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">


            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">หน้าหลัก <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">ผลงาน</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">ดาวห์โหลดคู่มือ</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/producer">ผู้จัดทำ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/instype">ผู้ดูแล</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="demo" class="carousel slide border border-info border-right-0 border-left-0" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/banner/banner.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="/images/banner/banner.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="/images/banner/banner.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
    </div>
    <br>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="right" id="sidebar-wrapper">
            <ul class="list-group">
                {{--
                <section class="content container-fluid"> --}}
                    <div class="card">
                        <div class="card-body">
                            <h4><strong>หมวดหมู่111</strong></h4>
                            <div class="card border-success mb-3" style="max-width: 20rem;">
                                <div class="card-header bg-success text-white"><strong><i class="fab fa-itunes-note"></i> โน๊ตสากลเบื้องต้น</strong></div>
                                <div class="card-body">
                                    <?php $values = DB::table('note')->orderBy('id')->get(); ?> @foreach($values as $value)
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('notedetail?id='.$value->id)}}"><i class="fas fa-angle-double-right"></i> {{$value->name_note}}</a></h6>
                                    @endforeach
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-question-circle"></i> แบบทดสอบ</a></h6>
                                </div>
                            </div>
                            <div class="card border-success mb-3" style="max-width: 20rem;">
                                <div class="card-header bg-success text-white"><strong><i class="fas fa-guitar"></i> ประเภทเครื่องดนตรีสากล</strong></div>
                                <div class="card-body">
                                    <?php $values = DB::table('instument_type')->orderBy('id')->get(); ?> @foreach($values as $value)
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('intype/'.$value->id)}}"><i class="fas fa-angle-double-right"></i> {{$value->name}}</a></h6>
                                    @endforeach
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-question-circle"></i> แบบทดสอบ</a></h6>
                                </div>
                            </div>
                            <div class="card border-success mb-3" style="max-width: 20rem;">
                                <div class="card-header bg-success text-white"><strong><i class="fas fa-podcast"></i> ทฤษฎีดนตรีสากลขั้นสูง</strong></div>
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('scal')}}"><i class="fas fa-angle-double-right"></i> scal</a></h6>
                                   
                                    <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-question-circle"></i> แบบทดสอบ</a></h6>
                                </div>
                            </div>
                            {{--
                            <h5><strong><i class="fas fa-podcast"></i> ทฤษฎีดนตรีสากลขั้นสูง</strong></h5>
                            <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('intype/'.$value->id)}}"><i class="fas fa-angle-double-right"></i> {{$value->name}}</a></h6>
                            <h6 class="card-subtitle mb-2 text-muted"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-question-circle"></i> แบบทดสอบ</a></h6>
                            --}}
                        </div>
                    </div>
                    {{-- </section> --}}
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            <br><br>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><strong>หมวดหมู่</strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <h5><strong><i class="fab fa-itunes-note"></i> โน๊ตสากลเบื้องต้น</strong></h5>
                                </li>
                                <li class="nav-item">
                                    <hr>
                                </li>
                                <li class="nav-item">
                                    <h5><strong><i class="fas fa-guitar"></i> ประเภทเครื่องดนตรีสากล</strong></h5>
                                </li>
                                <li>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-check-circle"></i> เครื่องสาย (String Instruments)</a>
                                </li>
                                <li class="nav-item">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-check-circle"></i> เครื่องลมไม้ (Woodwind Instruments)</a>
                                </li>
                                <li class="nav-item">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-check-circle"></i> เครื่องลมทองเหลือง (Brass Instruments)</a>
                                </li>
                                <li class="nav-item">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="far fa-check-circle"></i> เครื่องกระทบ (Percussion Instruments)</a>
                                </li>
                                <li class="nav-item">
                                    <hr>
                                </li>
                                <li class="nav-item">
                                    <h5><strong><i class="fas fa-podcast"></i> ทฤษฎีดนตรีสากลขั้นสูง</strong></h5>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Main content -->
    {{--
    <section class="content container-fluid">
        @yield('content')
    </section> --}}
    <!-- /.content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="/bootstrap-4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="/dev/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $("#menu-toggle").click(function(e) {
                  e.preventDefault();
                  $("#wrapper").toggleClass("toggled");
                });
    </script>
</body>

</html>