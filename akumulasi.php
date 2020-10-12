<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galih W Priambudi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="yahud/bootstrap.css">
</head>

<body>
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
                <li class="nav-item">
                    <a class="nav-link" href="aritmatika4.php">Aritmatika</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="akumulasi.php">Akumulasi <span class="sr-only">(current)</a>
                </li>
        </div>
        </li>
        </ul>
        </div>
    </nav>

    <form>
        <div class="jumbotron">
            <h3>Akumulasi Bilangan</h3>
            <hr class="my-4">
            <div class="form-group">

                <form method="get">
                    <input type="number" name="bil">
                    <button type="submit" name="sub" class="btn btn-primary" value="Hasil">SIMPAN</button>
                    <br>
                    <br>
                    <?php
                    if (isset($_GET['bil'])) {
                        if (isset($_GET['bils'])) {
                            $data = $_GET['bils'];
                        } else {
                            $data = array();
                        }

                        array_push($data, $_GET['bil']);
                        #print_r($data);

                        foreach ($data as $x)
                            echo '<input type="hidden" name="bils[]" value="' . $x . '" />';
                        echo "<p>";
                        $sum = 0;

                        foreach ($data as $x) {
                            echo "$x <br>";
                            $sum += $x;
                        }
                        echo "-----------------+ <br> $sum";
                    }
                    ?>
                </form>