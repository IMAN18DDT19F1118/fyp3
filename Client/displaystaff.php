<?php
include('connection.php');
session_start();
$stdid = $_SESSION['ic'];

$sql = "SELECT * FROM temu_janji WHERE IC_staff = '$stdid'";
//$result = mysqli_query($conn,$sql);

//opyion2
$result = $conn->query($sql);
?>
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
    }.lulus{
        background-color: greenyellow;
    }
    .gagal{
        background-color: red;
    }
    .mid{
        background-color: aqua;
    }

</style>
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
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
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
                    <h1 class="mt-4">Unit Kaunseling PTSS</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Paparan TemuJanji Anda</li>
                    </ol>
                    <div class="row">
                        <table border="1">
                            <tr>
                                <th>Tarikh TemuJanji</th>
                                <th>Masa</th>
                                <th>Kaunselor</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_object($result)) {
                                    $id = $row->ID;
                                    $pilihan = $row->pilihan;
                                    //echo "id:".$row["id"].":".$row["name"]." ".$row["gender"]." ".$row["age"]." ".$row["cgpa"]."<br>";
                            ?>

                                    <tr>

                                        <td><?php echo $row->tarikh; ?></td>
                                        <td><?php echo $row->masa; ?></td>

                                        <?php
                                        $id_kaunselor = $row->IC_Kaunselor;
                                        $sql = "SELECT * FROM kaunselor WHERE ID = '" . $id_kaunselor . "'";
                                        $result3 = $conn->query($sql);
                                        if (mysqli_num_rows($result3) > 0) {
                                            while ($row = mysqli_fetch_object($result3)) {
                                                $kaunselor_name = $row->Nama;
                                            }
                                        }

                                        ?>


                                        <td><?php echo $kaunselor_name; ?></td>
                                        <?php 
                                        if ($pilihan == "Diluluskan"){
                                            ?>
                                            <td class="lulus"><?php echo $pilihan; ?></td>
                                        <?php
                                        }else if($pilihan == "Tidak Diluluskan"){
                                        ?>
                                        <td class="gagal"><?php echo $pilihan; ?></td>
                                        <?php
                                        }else if($pilihan == "Belum Diluluskan"){
                                            ?>
                                            <td class="mid"><?php echo $pilihan; ?></td>
                                            <?php
                                        } else {
                                            ?>
                                           <h1>error</h1>
                                            <?php
                                        }
                                        ?>
                                        
                                        <td>
                                            <a href="updatestaff.php?id=<?php echo $id; ?>">Kemas Kini</a>

                                            <a href="deletetemu3.php?id=<?php echo $id; ?>">Padam</a>
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