<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galih W Priambudi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="yahud/bootstrap.css">
</head>

<body>
    <form method="GET" action="aritmatika4.php">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="home.php">PRAKTIKUM 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="aritmatika4.php">Aritmatika <span class="sr-only">(current)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="akumulasi.php">Akumulasi</a>
                    </li>
            </div>
            </li>
            </ul>
            </div>
        </nav>

        <form>
            <div class="jumbotron">
                <h3>Tambahkan Bilangan</h3>
                <hr class="my-4">
                <div class="form-group">
                    <input type="number" name="bil1" class="form" placeholder="Masukan Bilangan 1" <?php
                                                                                                    if (isset($_GET['bil1'])) {
                                                                                                        echo 'value="' . $_GET['bil1'] . '"';
                                                                                                    }
                                                                                                    ?>>
                    <select name="opr">
                        <option value="+" <?php
                                            if (isset($_GET['opr']) && $_GET['opr'] == '+') {
                                                echo 'selected';
                                            }
                                            ?>>+</option>
                        <option value="-" <?php
                                            if (isset($_GET['opr']) && $_GET['opr'] == '-') {
                                                echo 'selected';
                                            }
                                            ?>>-</option>
                        <option value="/" <?php
                                            if (isset($_GET['opr']) && $_GET['opr'] == '/') {
                                                echo 'selected';
                                            }
                                            ?>>/</option>
                        <option value="x" <?php
                                            if (isset($_GET['opr']) && $_GET['opr'] == 'x') {
                                                echo 'selected';
                                            }
                                            ?>>x</option>
                    </select>

                    <input type="number" name="bil2" class="form" placeholder="Masukan Bilangan 2" <?php
                                                                                                    if (isset($_GET['bil1'])) {
                                                                                                        echo 'value="' . $_GET['bil1'] . '"';
                                                                                                    }
                                                                                                    ?>>
                    <?php
                    include 'pustaka.php';
                    if (isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
                        echo $rslt = operasikan($_GET['bil1'], $_GET['bil2'], $_GET['opr']);
                        $log = $_GET['history'] . "<br>" . $_GET['bil1'] . " " . $_GET['opr'] . " " . $_GET['bil2'] . " = " . $rslt;
                        echo "<br><br><h4>Log Perhitungan</h4>";
                        echo $log;
                    }

                    ?>

                    <input type="hidden" name="history"
                    <?php
                    if (isset($_GET['sub']) && ($_GET['bil1'] != null) && ($_GET['bil2'] != null)) {
                        echo 'value="' . $log . '"';
                    } else {
                        echo 'value=""';
                    }
                    ?>
                </div>
                </div>
                <button type="submit" name="sub" class="btn btn-primary" value="Hasil">SIMPAN</button>



                <br>
            </div>
        </form>
</body>

</html>