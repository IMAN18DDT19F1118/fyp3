<?php
include('connection.php');

$idusr = $_GET["id"];
$dis_usr = "SELECT * FROM kauns WHERE ID='$idusr'";
$resultusr = $conn->query($dis_usr);

$row = $resultusr->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KAUNSELOR</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="kalendar.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="kaunselor.php">Kaunselor</a>
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
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="appointment.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Senarai Temu Janji
                        </a>

                        <a class="nav-link" href="kemaskalendar.php">
                            <div class="sb-nav-link-icon"><i class="far fa-calendar"></i></div>
                            Kemaskini Ketidaksediaan
                        </a>

                        <a class="nav-link" href="kalendar.php">
                            <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></div>
                            Senarai Ketidaksediaan
                        </a>

                        <a class="nav-link" href="report.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            Laporan
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Unit Kaunseling PTSS</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Kemaskini Ketidaksediaan</li>
                    </ol>
                    <div class="row">

                        <div class="wrapper">

                            <div class="registration_form">
                                <!-- Title -->
                                <div class="title">
                                    Kemaskini Ketidaksediaan
                                </div>

                                <form name="myform" method="post" action="updatekalendar.php">

                                    <div class="form_wrap">

                                        <div class="input_wrap">
                                            <label for="perkarau">Perkara :</label>
                                            <textarea id="perkarau" name="perkarau" rows="2" cols="60" value="<?php echo $row["perkara"]; ?>" required></textarea>
                                        </div>

                                        <div class="input_grp">

                                            <div class="input_wrap">
                                                <label for="tarikhu">Tarikh :</label>
                                                <input style="" type="date" id="tarikhu" name="tarikhu" value="<?php echo $row["tarikh"]; ?>" required>
                                            </div>

                                            <div class="input_wrap">
                                                <label for="masau">Masa :</label>
                                                <input type="time" id="masau" name="masau" value="<?php echo $row["masa"]; ?>" required>
                                            </div>

                                            <div class="input_wrap">
                                                <label for="tempohu">Tempoh :</label>
                                                <select name="tempohu" id="tempohu" value="<?php echo $row["tempoh"]; ?>" required>
                                                    <option value="no">-----Pilih jam-----</option>
                                                    <option value="1 jam">1 jam</option>
                                                    <option value="2 jam">2 jam</option>
                                                    <option value="3 jam">3 jam</option>
                                                    <option value="4 jam">4 jam</option>
                                                    <option value="5 jam">5 jam</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="input_grp">

                                            <div class="input_wrap">
                                                <input type="submit" value="Kemaskini" name="submit_btn" class="submit_btn">
                                            </div><br>

                                            <div class="input_wrap">
                                                <input type="reset" value="Batal" name="cancelbtn" class="submit_btn">
                                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                            </div>

                                        </div>

                                </form>
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

</html>