<?php
include('connection.php');
session_start();
    $id = $_GET["id"];
$sql = "SELECT * FROM temu_janji WHERE ID = " . $id;
//$result = mysqli_query($conn,$sql);

//opyion2
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="print.css" rel="stylesheet" media="print" />
</head>
<style>
    table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    th {
        background-color: #2471A3;
        color: #ffffff;
        text-align: left;
    }

    th,
    td {
        padding: 12px 15px;
    }

    td {
        border-bottom: 1px solid #dddddd;
    }

    td:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .lulus {
        background-color: greenyellow;
    }

    .gagal {
        background-color: red;
    }

    .bupdate {
        background-color: lightgreen;
        padding: 8px;
        min-height: 15px;
        min-width: 100px;
        border-radius: 10px;
    }

    .breset {
        background-color: red;
        padding: 8px;
        min-height: 15px;
        min-width: 100px;
        border-radius: 10px;
    }

    .bupdate:hover {
        background-color: green;
        transition: 0.7s;
    }

    .breset:hover {
        background-color: lightpink;
        transition: 0.7s;
    }

    .ball {
        background-color: lightskyblue;
    }
</style>

<body>
    <center><ins><b>Senarai Laporan</b><ins>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id =$row["ID"];
                        $komen = $row["komen"];
                        $_SESSION["ID"] = $id;
                ?>
                        <center>
                            <table border="1">
                            <tr>
                                    <th>Status :</th>
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
                                </tr>

                                <tr>
                                    <th>Tarikh :</th>
                                    <td><?php echo $row["tarikh"]; ?></td>
                                </tr>

                                <tr>
                                    <th>Masa :</th>
                                    <td><?php echo $row["masa"]; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Pelajar :</th>
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
                                </tr>

                                <tr>
                                    <th>No Matrik :</th>
                                    <td><?php echo $stud_matrik ?></td>
                                </tr>

                                <tr>
                                    <form action="simpankomen.php" method="POST">
                                        <input type="text" name="id_komen" value="<?php echo $id?>" hidden>
                                    <th>Komen :</th>
                                    <td><textarea id="komen" name="komen" rows="5" cols="50" disabled><?php echo $komen?></textarea></td>
                                </tr>

                                <td colspan="2">
                                    <center>
                                    </form>

                                        <button onclick="window.print();" class="btn btn-primary">Print</button>
                                    </center>
                                </td>
                        </center>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
                </table>
</body>

</html>