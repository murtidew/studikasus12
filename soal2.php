<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td></td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td></td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>bilangan Ketiga</td>
                <td></td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $bilangan_pertama = $_POST['bil_satu'];
            $bilangan_kedua = $_POST['bil_dua'];
            $bilangan_ketiga = $_POST['bil_tiga'];

            if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
                echo $bilangan_pertama;
            }
            else if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga){
                echo $bilangan_kedua;
            }
            else if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua){
                echo $bilangan_ketiga;
            }
        }

    ?>

</body>
</html>
</body>
</html>