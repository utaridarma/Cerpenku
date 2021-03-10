<?php
//Form submitted
//set input hasil dan deret menjadi kosong
$input1 = "";           //input1
$input2 = "";           //input2
$hasil = "";            //hasil
$deret = "";            //deret yang ditampilin
$jmlderet = "";         //jml deret

if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $jmlderet = $_POST["jmlderet"];

    //fibonacci

    $a = $input1;
    $b = $input2;
    $n = $jmlderet;

    $deret = $a . ", " . $b;
    for ($i = 0; $i < $n - 2; $i++) {

        $hasil = $a + $b;

        $a = $b;
        $b = $hasil;
        $deret = $deret . ", " . $hasil;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="icon" href="./img/surat ku.jpg" type="image/png">

    <title>Yuk Ngitung</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <!-- Navbar 1-->
        <div class="row">
        <nav class="navbar navbar-expand- list-color navbar-pink bg-red">
                <div class="navbar-brand">
                    <img src="img/sip.jpg" alt="">
                </div>
                <div class="navbar-nav mr-auto">
                    <div class="navbar-brand">
                        <h2>YUK Ngitung</h2>
                        <h2>Menghitung Deret Fibonacci</h2>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Akhir Navbar 1 -->

        <!-- Navbar 2 -->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                        <li class="nav-item">
                        <h5><a class="nav-item nav-link text-dark" href="Cussngitung.php">Kembali</a></h5>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Akhir Navbar 2 -->
    </div>
    <!-- Akhir Container -->

    <!-- Konten -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="#" class="bg-green form-container" id="forminput">
                    <h2>Menghitung Deret Fibonacci</h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Input 1</label>
                        <input type="text" class="form-control" value="<?php echo $input1; ?>" id="input1"
                            placeholder="Masukkan Angka Pertama" name="input1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Input 2</label>
                        <input type="text" class="form-control" value="<?php echo $input2; ?>" id="input2"
                            placeholder="Masukkan Angka Kedua" name="input2" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Jumlah Deret</label>
                        <input type="text" class="form-control" value="<?php echo $jmlderet; ?>" id="jmlderet"
                            placeholder="Masukkan Jumlah Deret" name="jmlderet" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">
                        Hitung
                    </button>
                    <br />
                    <div class="form-group">
                        <h5> <b>Hasil: </b> </h5>
                        <h4> <?php echo $deret; ?> </h4>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>
    <!-- akhir footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>


<!-- // $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

// if ($pageWasRefreshed ) {
// echo "p";
// $input1 = "";
// $input2 = "";
// $hasil = "";
// $deret = "";
// } else {
// //do nothing;
// }
// if ($check == 1) {
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// $_SESSION['postdata'] = $_POST;
// unset($_POST);
// header("Location: " . $_SERVER['PHP_SELF']);
// }
// }

// $check=0; -->