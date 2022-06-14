<?php
include("connection.php");

?>

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
    <link href="kaunselor.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    select {
        width: 150px;
        margin: 10px;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
</style>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Penasihat Akedemik</a>
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
                        <a class="nav-link" href="PaPage.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Halaman Utama
                        </a>

                        <a class="nav-link" href="Klist3.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Senarai tarikh ketidaksediaan kaunselor
                        </a>
                        <a class="nav-link" href="temujanjipa.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Temujanji
                        </a>

                        <a class="nav-link" href="rekord.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-commenting"></i></div>
                            Laporan kaunseling pelajar
                        </a>
                        <a class="nav-link" href="displaypa.php">
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
                    <ol>
                        <li class="breadcrumb-item active">Borang TemuJanji</li>
                    </ol>
                    <div class="row">
                        <div class="wrapper">
                            <div class="registration_form">
                                <!--Title-->
                                <div class="title">
                                    Temu Janji Kaunseling
                                </div>
                                <br><br>
                                <!-- Form -->
                                <div>
                                    <form action="temuprocess2.php" method="post">
                                        <div class="from_wrap">
                                            <label for="kan">Sila Pilih Pelajar Anda :</label><br>
                                            <select name="pelajar" id="pelajar" required>
                                                <option disabled>-Pilih Pelajar anda-</option>

                                                <?php
                                                $sql = "SELECT * FROM pelajar";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $row["ID"] ?>"><?php echo $row["Nama"] ?></option>

                                                <?php
                                                    }
                                                }

                                                ?>

                                            </select>
                                        </div>
                                        
                                        <div class="from_wrap">
                                            <label for="kan">Sila Pilih Kaunselor Anda :</label><br>
                                            <select name="kaunselor" id="kaunselor" required>
                                                <option disabled>-Pilih Kaunselor-</option>

                                                <?php
                                                $sql = "SELECT * FROM kaunselor";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $row["ID"] ?>"><?php echo $row["Nama"] ?></option>
                                                <?php
                                                    }
                                                }

                                                ?>

                                            </select>
                                        </div>

                                        <br><br>

                                        <div class="input_wrap">
                                            <label for="temujanji">TemuJanji</label><br>
                                            <input type="date" id="temujanji" name="date" required>

                                            <label for="schedule_time">Masa :</label>
                                            <input type="time" id="schedule_time" name="schedule_time">
                                        </div>
                                        <br><br>
                                        <!--Submit button-->
                                        <div class="view">
                                            <input type="submit" value="Submit" class="submit_btn" name="submit">
                                            <br><br>
                                        </div>
                                        <div class="setup">
                                            <input type="reset" value="set semula" class="reset_btn">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
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