<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
        <br>
        <center>
            <table>
                <tr>
                    <td><b>Masukan Angka &nbsp;</b></td>
                    <td>:</td>
                    <td> <input type="number" name="angka" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="simpan">Kirim</button></td>
                </tr>
            </table>
</center>
</form>
<?php
if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];

    for ($i = $angka; $i >= 1; --$i) {
        for ($j = $angka; $j >= $i; --$j) {
            echo "$j &nbsp";
        }
        echo '<br>';
    }
}
?>


</body>
</html>