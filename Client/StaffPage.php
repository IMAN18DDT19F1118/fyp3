<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Borang TemuJanji</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <link href="kaunselor.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Pelanggan</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="http://localhost:8080/fyp3/">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="StaffPage.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Halaman Utama
                        </a>

                        <a class="nav-link" href="Klist2.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Senarai tarikh ketidaksediaan kaunselor
                        </a>
                        <a class="nav-link" href="temujanjistaff.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Temujanji
                        </a>

                        <a class="nav-link" href="displaystaff.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Senarai Temujanji
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Unit Pengurusan Kaunseling Politeknik Tuanku Syed Sirajuddin</h1>
            
                        <h1>Selamat Datang</h1>
                            <br><br><br>
                            <h1>Senarai nama kaunselor PTSS</h1>
                            <br><br><br>
                            <img src="img/image1.jpeg" alt="" width="20%" height="200">
                            <p><h4>KETUA UNIT PENGURUSAN PSIKOLOGI </h4></p>
                            <p><h5>WAN KAMARIAH BT WAN MAT</h5></p>
                            <p>(PEGAWAI PSIKOLOGI S44)</p>
                            <p>04-9886208</p>
                            <p>kamariah@ptss.edu.my</p>
                            <br><br><br>
                            <img src="img/image2.jpeg" alt="" width="20%" height="200">
                            <p><h5>NORZILA BINTI MHD NOOR </h5></p>
                            <P>(PEGAWAI PSIKOLOGI S44)</P>
                            <p>04-9886205</p>
                            <p>norzila@ptss.edu.my</p>
                            <br><br><br>
                            <img src="img/image3.jpeg" alt="" width="20%" height="200">
                            <p><h5>RAJA RABIAATUM ADAWIAH BT RAJA MAMAT </h5></p>
                            <P>(PEGAWAI PSIKOLOGI S44)</P>
                            <p>04-9881100</p>
                            <p>rabiaatum@ptss.edu.my</p>                
            
                    
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
