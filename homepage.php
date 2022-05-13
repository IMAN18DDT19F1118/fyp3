<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Penasihat Akedemik</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <link href="stylea.css" rel="stylesheet"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">HALAMAN UTAMA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="homepage.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Halaman Utama
                            </a>

                            <a class="nav-link" href="loginpage.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Log Masuk
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Unit Pengurusan Kaunseling Politeknik Tuanku Syed Sirajuddin</h1>
                        <div class="main-banner" id="main-banner">
                            
                            <div class="imgban" id="imgban1">

                            </div>
                            <div class="imgban" id="imgban2">
                                
                            </div>
                            <div class="imgban" id="imgban3">
                                
                            </div>
                           
                        </div>   
                        <script>
                            var bannerStatus = 1;
                            var bannerTimer = 10;

                            window.onload = function(){
                                bannerLoop();
                            }

                            var startBannerLoop = setInterval(function(){
                                bannerLoop();
                            }, bannerTimer);

                            document.getElementById("main-banner").onmouseenter = function(){
                                clearInterval(startBannerLoop);
                            }

                            document.getElementById("main-banner").onmouseleave = function(){
                                startBannerLoop = setInterval(function(){
                                bannerLoop();
                            }, bannerTimer);
                            }



                            function bannerLoop(){
                                if(bannerStatus === 1){
                                    document.getElementById("imgban2").style.opacity = "0";
                                    setTimeout(function() => {
                                    document.getElementById("imgban1").style.right = "0px";
                                    document.getElementById("imgban1").style.zIndex = "1000";
                                    document.getElementById("imgban2").style.right = "-1200px";
                                    document.getElementById("imgban2").style.zIndex = "1500";
                                    document.getElementById("imgban3").style.right = "120px";
                                    document.getElementById("imgban3").style.zIndex = "500";
                                    }, 500);
                                    
                                    setTimeout(function(){
                                        document.getElementById("imgban2").style.opacity = "1";
                                    }, 1000);
                                    
                                    var bannerStatus = 2;
                                }
                                
                            else if(bannerStatus === 2){
                                    document.getElementById("imgban3").style.opacity = "0";
                                    setTimeout(function() => {
                                    document.getElementById("imgban2").style.right = "0px";
                                    document.getElementById("imgban2").style.zIndex = "1000";
                                    document.getElementById("imgban3").style.right = "-1200px";
                                    document.getElementById("imgban3").style.zIndex = "1500";
                                    document.getElementById("imgban1").style.right = "120px";
                                    document.getElementById("imgban1").style.zIndex = "500";
                                    }, 500);
                                    
                                    setTimeout(function(){
                                        document.getElementById("imgban3").style.opacity = "1";
                                    }, 1000);
                                    
                                    var bannerStatus = 3;
                                }
                                else if(bannerStatus === 3){
                                    document.getElementById("imgban1").style.opacity = "0";
                                    setTimeout(function() => {
                                    document.getElementById("imgban3").style.right = "0px";
                                    document.getElementById("imgban3").style.zIndex = "1000";
                                    document.getElementById("imgban1").style.right = "-1200px";
                                    document.getElementById("imgban1").style.zIndex = "1500";
                                    document.getElementById("imgban2").style.right = "120px";
                                    document.getElementById("imgban2").style.zIndex = "500";
                                    }, 500);
                                    
                                    setTimeout(function(){
                                        document.getElementById("imgban1").style.opacity = "1";
                                    }, 1000);
                                    
                                    var bannerStatus = 1;
                                }
                                
                            }
                        </script>
                        <div class="row">
                            <h1>Selamat Datang</h1>
                            <br><br>
                            <h1>Pengenalan</h1>
                            <br><br>
                            <p>Unit Pengurusan Psikologi (UPPsi) merupakan unit sokongan di bawah Timbalan Pengarah Sokongan Akademik,
                             Politeknik Tuanku Syed Sirajuddin (PTSS). UPPsi berperanan membantu ke arah perkembangan warga 
                             Politeknik (kakitangan dan pelajar) yang sejahtera emosi, pemikiran, fizikal, spiritual dan sosial 
                             agar dapat berfungsi dengan baik dan dapat menyumbang ke arah kecemerlangan Politeknik.</p>
                        </div>
                        <center><h5>Carta Organisasi</h5></center>
                        <div>
                        <center><img src="img/carta.jpg" width="500" height="500"></center>
                        </div>
                        
                        
                            
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
