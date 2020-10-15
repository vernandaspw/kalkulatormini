<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator mini</title>
    <link rel="stylesheet" href="./Style/main.css">
</head>

<body>
    <div class="index">
        <form method="POST" action="detail.php">
            <div class="judulform">Kalkulator</div>
            <div class="filed1">
                <div class="judulfield">Angka 1 : </div>
                <div>
                    <input type="number" name="angka1" placeholder="Masukan angka" id="">
                </div>
            </div>
            <div class="filed2">
                <div class="judulfield2">Angka 2 : </div>
                <div>
                    <input type="number" name="angka2" placeholder="Masukan angka" id="">
                </div>
            </div>

            <div class="tombol">
                <button class="button1" name="submit" type="submit">SUBMIT</button>
                <button class="button2" name="reset" type="reset""><span>Reset</span></button>
            </div>


        </form>
    </div>

</body>

</html>