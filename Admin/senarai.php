<?php
include('connection.php');
session_start();

$sql = "SELECT * FROM temu_janji";
//$result = mysqli_query($conn,$sql);

//opyion2
$result = $conn->query($sql);
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="kaunselor.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th {
        background: lightblue;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
    }

    tr:nth-child(even) {
        background: #efefef;
    }

    tr:hover {
        background: #d1d1d1;
    }

    .lulus {
        background-color: greenyellow;
    }

    .gagal {
        background-color: red;
    }
</style>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
                        <a class="nav-link" href="Admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Halaman Utama
                            </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Daftar
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
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
                    
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Unit Kaunseling PTSS</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="row">
                    <table border="1">
                            <tr>
                                <th>Tarikh</th>
                                <th>Masa</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>No Pendaftaran</th>
                                

                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row["ID"];
                                    
                                    //    $_SESSION['id'] = $id;
                            ?>
                                    <tr>
                                        
                                        
                                        <td><?php echo $row["tarikh"]; ?></td>
                                        <td><?php echo $row["masa"]; ?></td>
                                        <?php
                                        if ($row["pilihan"] == "Diluluskan") {
                                        ?>
                                            <td class="lulus"><?php echo $row["pilihan"]; ?></td>
                                        <?php
                                        } else {
                                        ?>
                                            <td class="gagal"><?php echo $row["pilihan"]; ?></td>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                            $id_pelajar = $row["IC_Pelajar"];
                                            $sql = "SELECT * FROM pelajar WHERE ID = '" . $id_pelajar . "'";
                                            $result3 = $conn->query($sql);
                                            if (mysqli_num_rows($result3) > 0) {
                                                while ($row = mysqli_fetch_assoc($result3)) {
                                                    $stud_name = $row["Nama"];
                                                    $stud_matrik = $row["NoPendaftaran"];


                                                }
                                            }

                                            ?>
                                            <td><?php echo $stud_name ?></td>
                                            <td><?php echo $stud_matrik ?></td>
                                        
                                        </td>

                                       
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "0 results";
                            }
                            mysqli_close($conn);
                            ?>
                        </table>

                            
                            </div>
                        </div>


                    </div>


                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2022</div>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>