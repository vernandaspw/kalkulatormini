<?php 
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];

$a = $angka1;
$b = $angka2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterangan Hasil</title>
    <link rel="stylesheet" href="./Style/main.css">
</head>

<body>
    <div class="detail">
        <div class="detailkonten">
            <div class="header">

                <h2 class="judul">Keterangan Hasil</h2>
            </div>
            <table class="diketahui">
                <tr>
                    <td class="dik">Diketahui</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Angka 1</td>
                    <td>:</td>
                    <td><?= $a; ?></td>
                </tr>
                <tr>
                    <td>Angka 2</td>
                    <td>:</td>
                    <td><?= $b; ?></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <span class="jhasil">Hasil</span>
                    </td>
                </tr>
                <tr>
                    <td>Tambah</td>
                    <td>:</td>
                    <td><?= $a + $b; ?></td>
                </tr>
                <tr>
                    <td>Kurang</td>
                    <td>:</td>
                    <td><?= $a - $b; ?></td>
                </tr>
                <tr>
                    <td>Kali</td>
                    <td>:</td>
                    <td><?= $a * $b; ?></td>
                </tr>
                <tr>
                    <td>Bagi</td>
                    <td>:</td>
                    <td><?= $a / $b; ?></td>
                </tr>
            </table>
            <p class="tgl"><?php echo date("d M Y") ?></p>
            <br>
            <center>
                <a href="index.php" class="kembal">KEMBALI</a>
            </center>

        </div>
    </div>
</body>

</html>