<?php


include('connection.php');
$tahun = date("Y");
if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
}

$sql = "SELECT * FROM temu_janji WHERE pilihan = 'Diluluskan' AND tarikh LIKE '$tahun%'";
$result = mysqli_query($conn, $sql);
$chart_data = "";
$bulan_name = ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

$total_temujanji = [];
for ($i = 0; $i < 12; $i++) {
    $total_temujanji[$i] = 0;
}

while ($row = mysqli_fetch_assoc($result)) {
    $month = explode("-", $row['tarikh']);
    for ($i = 0; $i < 12; $i++) {
        if ($month[1] == ($i + 1)) {
            $total_temujanji[$i] = $total_temujanji[$i] + 1;
        }
    }
}


/*
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $masa[$i] = $row['ID'];
    $pelajar[$i] = $row['IC_Pelajar'];
    $tarikh[$i] = $row['tarikh'];
    $pilihan[$i] = $row['pilihan'];
    $month = explode("-", $row['tarikh']);
}
*/

//$bulan3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
//$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

/*
$count = 0;
while ($count < 12) {
    if ($bulan3[1] == "01") {
        $bulan[$count] = "Januari";
    } else if ($bulan3[1] == "02") {
        $bulan[$count] = "Februari";
    } else if ($bulan3[1] == "03") {
        $bulan[$count] = "Mac";
    } else if ($bulan3[1] == "04") {
        $bulan[$count] = "April";
    } else if ($bulan3[1] == "05") {
        $bulan[$count] = "May";
    } else if ($bulan3[1] == "06") {
        $bulan[$count] = "Jun";
    } else if ($bulan3[1] == "07") {
        $bulan[$count] = "Julai";
    } else if ($bulan3 == "08") {
        $bulan[$count] = "Ogos";
    } else if ($bulan3[1] == "09") {
        $bulan[$count] = "September";
    } else if ($bulan3[1] == "10") {
        $bulan[$count] = "Oktober";
    } else if ($bulan3[1] == "11") {
        $bulan[$count] = "November";
    } else if ($bulan[1] == "12") {
        $bulan[$count] = "Disember";
    }
    $count++;
}
*/





/* $sql = "SELECT * FROM kaunselor";
$result = mysqli_query($conn, $sql);
$chart_data = "";
while ($row = mysqli_fetch_array($result)) {
    $ic_kaunselor = $row['ID'];
    $nama_kaunselor = $row['Nama'];
    $count = 1;
    $sql = "SELECT * FROM temu_janji WHERE IC_Kaunselor = " . $ic_kaunselor;
    $result2 = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result2)) {
        $bilangan[$nama_kaunselor][$count];
    $count++;
    }
}

$sql = "SELECT * FROM temu_janji WHERE IC_Kaunselor = " ;
$result = mysqli_query($conn, $sql);
$chart_data = "";
while ($row = mysqli_fetch_array($result)) {

    $tarikh[]  = $row['tarikh'];
    $masa[] = $row['masa'];
}
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                        <a class="nav-link" href="Admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Halaman Utama
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Daftar
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="kaunselor.php">Kaunselor</a>
                                <a class="nav-link" href="pelajar.php">Pelajar</a>
                                <a class="nav-link" href="staff.php">Staff</a>

                                <a class="nav-link" href="pa.php">Penasihat Akademik</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="statistik.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Statistik
                        </a>
                        <a class="nav-link" href="senarai.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Senarai Temujanji
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    ADMIN
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Statistik</h1>
                    
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Temujanji</li>
                    </ol>
                    <div class="row">
                        <div style="width:60%; height:50%; text-align:center">
                            <h3 class="page-header"> Bilangan temujanji diluluskan </h3><br><br>
                            <div></div>
                            <canvas id="chartjs_bar"></canvas>
                        </div>
                    </div>


                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
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
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById("chartjs_bar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($bulan_name); ?>,
            datasets: [{
                backgroundColor: [
                    "#5969ff",
                    "#ff407b",
                    "#25d5f2",
                    "#ffc750",
                    "#2ec551",
                    "#FFFF00",
                    "#7FFFE8",
                    "#033E3E",
                    "#E2A76F",
                    "#71E357",
                    "#7040fa",
                    "#ff004e"
                ],
                data: <?php echo json_encode($total_temujanji) ?>,
            }]
        },
        options: {
            legend: {
                display: true,
                position: 'bottom',

                labels: {
                    fontColor: '#71748d',
                    fontFamily: 'Circular Std Book',
                    fontSize: 20,
                }
            },


        }
    });
</script>

</html>