<?php

session_start();
require_once "dbcontroller.php";
$db = new DB;

$sql = "SELECT * FROM tblkategori ORDER BY kategori";
$row = $db->getALL($sql);

if (isset($_GET['log'])) {
    session_destroy();
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran SMK</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">

        <div class="row mt-4">
            <div class="col-md-3 mt-2">
                <h2> <a href="index.php">Restoran SMK</a></h2>
            </div>

            <div class="col-md-9">
                <?php
                if (isset($_SESSION['pelanggan'])) {
                    echo '
                        <div class="float-right mt-4"><a href="?log=logout"> Log out </a></div>
                        <div class="float-right mt-4 mr-4"> Pelanggan : <a href="?f=home&m=beli"> ' . $_SESSION['pelanggan'] . '</a></div>';
                } else {
                    echo '
                        <div class="float-right mt-4 mr-4"><a href="?f=home&m=login"> Login </a></div>
                        <div class="float-right mt-4 mr-4"><a href="?f=home&m=daftar"> Daftar </a></div>
                        ';
                }
                ?>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-3">
                <h3>kategori</h3>
                <hr>
                <?php if (!empty($row)) { ?>
                    <ul class="nav flex-column">
                        <?php foreach ($row as $r) : ?>
                            <li class="nav-item"><a class="nav-link" href="?f=home&m=produk&id=<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-md-9">
                <?php
                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f = $_GET['f'];
                    $m = $_GET['m'];

                    $file = $f . '/' . $m . '.php';

                    require_once $file;
                } else {
                    require_once "home/produk.php";
                }
                ?>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col">
                <p class="text-center"> 2020 - Copyright Riskyo </p>
            </div>
        </div>
    </div>
</body>

</html>