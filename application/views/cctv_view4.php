<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="https://cctv.badilag.net/assets/images/aco.png" type="image/png" />
    <!--plugins-->
    <link href="https://cctv.badilag.net/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="https://cctv.badilag.net/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="https://cctv.badilag.net/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="https://cctv.badilag.net/assets/css/pace.min.css" rel="stylesheet" />
    <script src="https://cctv.badilag.net/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cctv.badilag.net/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cctv.badilag.net/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cctv.badilag.net/assets/css/app.css" rel="stylesheet">
    <link href="https://cctv.badilag.net/assets/css/icons.css" rel="stylesheet">
    <title>Selamat Datang Pada Halaman CCTV Online Pengadilan Agama Amuntai</title>
    <!--favicon-->
    <link rel="icon" href="https://cctv.badilag.net/assets/images/aco.png" type="image/png" />
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="card radius-10 card border-top border-0 border-4 border-primary">
                    <div class="card-body">
                        <img class="img-fluid" src="https://cctv.badilag.net/assets/images/banner_aco.jpg">
                    </div>
                </div>
                <div class="card radius-10 card border-start border-end border-0 border-4 border-primary">
                    <div class="card-body text-center">
                        <h4>Selamat Datang Pada Halaman CCTV Online Pengadilan Agama Amuntai</h4>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card border-top border-0 border-4 border-success">
                            <div class="card-body text-center">
                                <h6><i class="bx bx-cctv"></i> PTSP</h6>
                                <div class="border p-4 rounded">
                                    <iframe width="100%" height="300" src="https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=846338227280923732711848" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto">
                        <div class="card border-top border-0 border-4 border-success">
                            <div class="card-body text-center">
                                <h6><i class="bx bx-cctv"></i> RUANG TUNGGU SIDANG</h6>
                                <div class="border p-4 rounded">
                                    <iframe width="100%" height="300" src="https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=303329746330290962284656" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mx-auto">
                        <div class="card border-top border-0 border-4 border-success">
                            <div class="card-body text-center">
                                <h6><i class="bx bx-cctv"></i> KANTIN/MUSHOLA/HALAMAN PARKIR</h6>
                                <div class="border p-4 rounded">
                                    <iframe width="100%" height="300" src="https://paamuntai.cctvbadilag2.my.id/402556PAAMUNTAI/play.html?name=883576768194955166649178" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <a href="https://mi.pa-amuntai.go.id" target="_blank">
                    <div class="row w-50 p-3 mx-auto">
                        <img src="https://cctv.badilag.net/assets/images/kontak-wa2.png" class="text-center mb-2">
                    </div>
                </a>
                <div class="row">
                    <div class="card card border-start border-end border-0 border-4 border-danger">
                        <div class="card-body text-center">


                            <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD-Q5tWJXx2XxkfkHmx9R6CRSZoFDiWPz0&q=Pengadilan Agama Amuntai&zoom=18">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-5 text-center">
                    <div id="histats_counter"></div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="https://cctv.badilag.net/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="https://cctv.badilag.net/assets/js/jquery.min.js"></script>
    <script src="https://cctv.badilag.net/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="https://cctv.badilag.net/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="https://cctv.badilag.net/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $('[data-bs-tooltip="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="https://cctv.badilag.net/assets/js/app.js"></script>
    <!-- Histats.com  (div with counter) -->
    <!-- Histats.com  START  (aync)-->
    <script type="text/javascript">
        var _Hasync = _Hasync || [];
        _Hasync.push(['Histats.start', '1,4636066,4,2051,280,25,00011111']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
            var hs = document.createElement('script');
            hs.type = 'text/javascript';
            hs.async = true;
            hs.src = ('//s10.histats.com/js15_as.js');
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();
    </script>
    <noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4636066&101" alt="" border="0"></a></noscript>
    <!-- Histats.com  END  -->
</body>

</html>
