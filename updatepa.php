<?php
include('connection.php');

$idusr=$_GET["id"];
$dis_usr="SELECT * FROM temu_janji WHERE id='$idusr'";
$resultusr=$conn->query($dis_usr);

$row=$resultusr->fetch_assoc();
?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Maklumat Pembaharuan Bagi Penasihat Akedemik</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
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
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Index.php">Logout</a></li>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ketersediaan kaunselor pada kalendar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <a class="nav-link" href="temujanjipa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Temujanji
                            </a>
                            <a class="nav-link" href="maklumatPe.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-child"></i></div>
                                maklumat pelajar
                            </a>
                            <a class="nav-link" href="rekord.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-commenting"></i></div>
                                rekord pelajar
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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <center><ins><b>mengubah masa dan tarikh</b><ins></center>

<form name="temujanji" action="updateprocess2.php" method="post">
    <center>
        <br>
        <b>Tarikh : </b>
        <input type="date" name="date" value="<?php echo $row["tarikh"];?>" required>
        <br><br>

        <b>Masa : </b>
        <select name="schedule_time" <?php echo $row["masa"];?> required>
                                        <option>-Select Time-</option>
                                        <option value="08:00">08:00 am</option>
                                        <option value="08:30">08:30 am</option>
                                        <option value="09:00">09:00 am</option>
                                        <option value="09:30">09:30 am</option>
                                        <option value="10:00">10:00 am</option>
                                        <option value="10:30">10:30 am</option>
                                        <option value="11:00">11:00 am</option>
                                        <option value="11:30">11:30 am</option>
                                        <option value="12:00">12:00 pm</option>
                                        <option value="12:30">12:30 pm</option>
                                        <option value="1:00">1:00 pm</option>
                                        <option value="1:30">1:30 pm</option>
                                        <option value="2:00">2:00 pm</option>
                                        <option value="2:30">2:30 pm</option>
                                        <option value="3:00">3:00 pm</option>
                                        <option value="3:30">3:30 pm</option>
                                        <option value="4:00">4:00 pm</option>
                                        <option value="4:30">4:30 pm</option>
                                    </select>
        <br><br>
    </center>

    <br>

    <center>
        <input type="submit" name="Submit" value="Update">
        <input type="reset" value="Reset">
        <input type="hidden" name="id" value="<?php echo $row["ID"];?>">
    </center>
</form>
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

    </body>
</html>