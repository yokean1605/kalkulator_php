<?php
    if (isset($_POST['hitung'])) {
        $bil1    = $_POST['bil1'];
        $bil2    = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
            break;

            case 'kurang':
                $hasil = $bil1 - $bil2;
            break;
            
            case 'kali':
                $hasil = $bil1 * $bil2;
            break;
            
            case 'bagi':
                $hasil = $bil1 / $bil2;
            break;
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Applikasi Kalkulator dengan PHP</title>
</head>
<body>
    <div class="app-kalkulator">
        <div class="container">
            <div class="kalkulator">
                <h2 class="text-center text-white">Kalkulator</h2>
                <a class="text-center d-block" href="yudistira.xyz">yudistira.xyz</a>
                <form method="post" action="index.php" class="mt-4" autocomplete="off">
                    <div class="form-group">
                        <input id="angka1" class="form-control" type="text" name="bil1" placeholder="Masukan bilangan 1">
                    </div>
                    <div class="form-group">
                        <input id="angka2" class="form-control" type="text" name="bil2" placeholder="Masukan bilangan 2" >
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <select id="select" class="custom-select" name="operasi">
                                    <option value="tambah">+</option>
                                    <option value="kurang">-</option>
                                    <option value="kali">*</option>
                                    <option value="bagi">/</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <input type="submit" value="Hitung" class="btn btn-default w-100" name="hitung">
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['hitung'])) {
                    ?>
                        <input type="text" name="" id="" value="<?=$hasil?>" class="form-control">
                    <?php
                        } else {
                    ?>
                            <input type="text" name="" id="" value="0" class="form-control">
                    <?php
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
