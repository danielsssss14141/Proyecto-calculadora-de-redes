<?php
require "../controladores/controladorb.php";
$obj = new Claseb();
$obj->extraerdatos();
$obj->calcularBits();
$obj->nuevaMascara();
$obj->calcularSaltos();
$obj->hallarHostsTotal();
$obj->hallarHostsUtiles();
$obj->hallarOct();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/clasea.css">
    <title>Calculadora | Clase b</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <script src="../js/alertas2.js"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="../img/logofondo.png" alt="Logo principal" width="80" height="80"> Calculadora de subnetting
                </a>
            </div>
        </nav>

        <ul class="nav nav-tabs" style="background-color: #e3f2fd;">
            <li class="nav-item">
                <a class="nav-link" href="../clases/clasea.html">Clase a</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../clases/claseb.html">Clase b</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../clases/clasec.html">Clase c</a>
            </li>
        </ul>

        <div class="position-absolute top-0 end-0" style="margin-top: 165px; margin-right: 13px;">
            <a class="btn btn-outline-primary" href="../clases/claseb.html" role="button">
                <span class="material-icons-two-tone">
                    <img src="../img/arrowback.png" alt="arrowback">
                </span>
                Calcular otra dirección IP
            </a>
        </div>

        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="table table-bordered border-success" <?php
                                                                if ($obj->getSubredes() <= 4) {
                                                                    echo ("style='margin-top: 300px;'");
                                                                } else if ($obj->getSubredes() <= 8 && $obj->getSubredes() > 4) {
                                                                    echo ("style='margin-top: 470px;'");
                                                                } else if ($obj->getSubredes() <= 16 && $obj->getSubredes() > 8) {
                                                                    echo ("style='margin-top: 800px;'");
                                                                } else if ($obj->getSubredes() <= 32 && $obj->getSubredes() > 16) {
                                                                    echo ("style='margin-top: 1500px;'");
                                                                } else if ($obj->getSubredes() <= 64 && $obj->getSubredes() > 32) {
                                                                    echo ("style='margin-top: 2800px;'");
                                                                } else if ($obj->getSubredes() <= 128 && $obj->getSubredes() > 64) {
                                                                    echo ("style='margin-top: 5500px;'");
                                                                } else if ($obj->getSubredes() <= 256 && $obj->getSubredes() > 128) {
                                                                    echo ("style='margin-top: 10700px;'");
                                                                } else if ($obj->getSubredes() <= 512 && $obj->getSubredes() > 256) {
                                                                    echo ("style='margin-top: 21200px;'");
                                                                } else if ($obj->getSubredes() <= 1024 && $obj->getSubredes() > 512) {
                                                                    echo ("style='margin-top: 42200px;'");
                                                                } else if ($obj->getSubredes() <= 2048 && $obj->getSubredes() > 1024) {
                                                                    echo ("style='margin-top: 84200px;'");
                                                                } else if ($obj->getSubredes() <= 4096 && $obj->getSubredes() > 2048) {
                                                                    echo ("style='margin-top: 168100px;'");
                                                                } else if ($obj->getSubredes() <= 8192 && $obj->getSubredes() > 4096) {
                                                                    echo ("style='margin-top: 336050px;'");
                                                                } else if ($obj->getSubredes() <= 16384 && $obj->getSubredes() > 8192) {
                                                                    echo ("style='margin-top: 672000px;'");
                                                                } else if ($obj->getSubredes() <= 32768 && $obj->getSubredes() > 16384) {
                                                                    echo ("style='margin-top: 1343750px;'");
                                                                }
                                                                ?>>
                <tbody>
                    <tr>
                        <th scope="row">Dirección IP:</th>
                        <td>
                            <?php
                            echo ($obj->getIp());
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Número de subredes:</th>
                        <td>
                            <?php
                            echo ($obj->getSubredes());
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered border-success" style="margin-top: 50px;">
                <tbody>
                    <tr>
                        <th scope="row">Clase de la red:</th>
                        <td>Clase b</td>
                    </tr>
                    <tr>
                        <th scope="row">Máscara de red por defecto:</th>
                        <td>255.255.0.0 /16</td>
                    </tr>
                    <tr>
                        <th scope="row">Cantidad de subredes en total:</th>
                        <td>
                            <?php
                            echo (pow(2, $obj->getBits()));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Número de bits tomados:</th>
                        <td>
                            <?php
                            echo ($obj->getBits());
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nueva Máscara de red:</th>
                        <td>
                            <?php
                            echo ($obj->getBin1() . "." . $obj->getBin2() . "." . $obj->getBin3() . "." . $obj->getBin4() . " /" . (16 + $obj->getBits()));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Número de hosts en total:</th>
                        <td>
                            <?php
                            echo (number_format($obj->getHostt()));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Número de hosts útiles:</th>
                        <td>
                            <?php
                            echo (number_format($obj->getHostu()));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Cantidad de saltos por cada subred:</th>
                        <td>
                            <?php
                            echo ($obj->getSaltos());
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered border-success" style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th scope="col">Número de subred</th>
                        <th scope="col">Dirección red</th>
                        <th scope="col">Dirección primer equipo</th>
                        <th scope="col">Dirección último equipo</th>
                        <th scope="col">Broadcast</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $l1 = $obj->getOct1();
                    $l2 = $obj->getOct2();
                    $l3 = $obj->getOct3();
                    $l4 = $obj->getOct4();

                    for ($i = 1; $i <= pow(2, $obj->getBits()); $i++) {
                        if ($obj->getBits() <= 8) {
                            if ($i == 1) {
                                echo ("<tr>");
                                echo ('<th scope="row">' . $i . '</th>');
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . $l4 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3  . "." . ($l4 + 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . ($l3 += ($obj->getSaltos() - 1)) . "." . 254 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . 255 . "</td>");
                                echo ("</tr>");
                            } else {
                                echo ("<tr>");
                                echo ('<th scope="row">' . $i . '</th>');
                                echo ("<td>" . $l1 . "." . $l2 . "." . ($l3 += 1) . "." . $l4 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3  . "." . ($l4 + 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . ($l3 += ($obj->getSaltos() - 1)) . "." . 254 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . 255 . "</td>");
                                echo ("</tr>");
                            }
                        } else if ($obj->getBits() <= 16) {
                            if ($i == 1) {
                                echo ("<tr>");
                                echo ('<th scope="row">' . $i . '</th>');
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . $l4 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3  . "." . ($l4 + 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += ($obj->getSaltos() - 2)) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += 1) . "</td>");
                                echo ("</tr>");
                            } else if ($l4 != 255) {
                                echo ("<tr>");
                                echo ('<th scope="row">' . $i . '</th>');
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3  . "." . ($l4 + 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += ($obj->getSaltos() - 2)) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += 1) . "</td>");
                                echo ("</tr>");
                            } else if ($l4 == 255) {
                                $l4 = 0;
                                echo ("<tr>");
                                echo ('<th scope="row">' . $i . '</th>');
                                echo ("<td>" . $l1 . "." . $l2 . "." . ($l3 += 1) . "." . $l4 . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3  . "." . ($l4 + 1) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += ($obj->getSaltos() - 2)) . "</td>");
                                echo ("<td>" . $l1 . "." . $l2 . "." . $l3 . "." . ($l4 += 1) . "</td>");
                                echo ("</tr>");
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="../sweetalerts/dist/jquery.slim.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="../sweetalerts/dist/sweetalert2.all.min.js"></script>
</body>

</html>