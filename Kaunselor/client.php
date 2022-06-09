<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KAUNSELOR</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="kalendar.css" rel="stylesheet" />
</head>

<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Unit Kaunseling PTSS</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">DAFTAR TEMU JANJI</li>
                </ol>
                <div class="row">

                    <div class="wrapper">

                        <div class="registration_form">
                            <!-- Title -->
                            <div class="title">
                                DAFTAR TEMU JANJI
                            </div>

                            <form name="myform" action="clientprocess.php" method="post">

                                <div class="form_wrap">

                                    <div class="input_wrap">
                                        <label for="clients">Nama Pelajar :</label>
                                        <input type="text" id="clients" name="clients" required>
                                    </div>

                                    <div class="input_wrap">
                                        <label for="matric">No Matrik :</label>
                                        <input type="text" id="matric" name="matric" required>
                                    </div>

                                    <div class="input_grp">

                                        <div class="input_wrap">
                                            <label for="ctarikh">Tarikh :</label>
                                            <input type="date" id="ctarikh" name="ctarikh">
                                        </div>

                                        <div class="input_wrap">
                                            <label for="cmasa">Masa :</label>
                                            <input type="time" id="cmasa" name="cmasa">
                                        </div>

                                    </div>

                                    <div class="input_grp">
                                        <div class="input_wrap">
                                            <input type="submit" value="Hantar" name="submit_btn" class="submit_btn"></input>
                                        </div><br>

                                        <div class="input_wrap">
                                            <input type="reset" value="Batal" name="reset_btn" class="submit_btn"></input>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
        </main>

    </div>
    </div>

</body>

</html>