<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body style="background-image: url(https://wallpapercave.com/wp/wp2937416.jpg) ; color:white" >
        <?php if (isset($_POST['pesan'])) {
    $nasi_goreng = $_POST['nasi_goreng'];
    $mie_goreng = $_POST['mie_goreng'];
    $ayam_goreng = $_POST['ayam_goreng'];
    $kopi = $_POST['kopi'];
    $teh_manis = $_POST['teh_manis'];
    $lemon_tea = $_POST['lemon_tea'];
}
        ?>

        <form action="hasil_cafe.php" method="post">
            <label><b>Detail Pesanan</b></label>
            <table>
                <?php if ($nasi_goreng) { ?>
                <tr>
                    <td><label for="nasi_goreng">Jumlah Nasi Goreng</label></td>
                    <td>:</td>
                    <td><input type="number" name="nasi_goreng" id="nasi_goreng"></td>
                </tr>
                <?php }?>

                <?php if ($mie_goreng) { ?>
                <tr>
                    <td><label for="mie_goreng">Jumlah Mie Goreng</label></td>
                    <td>:</td>
                    <td><input type="number" name="mie_goreng" id="mie_goreng"></td>
                </tr>
                <?php }?>

                <?php if ($ayam_goreng) { ?>
                <tr>
                    <td><label for="ayam_goreng">Jumlah Ayam Goreng</label></td>
                    <td>:</td>
                    <td><input type="number" name="ayam_goreng" id="ayam_goreng"></td>
                </tr>
                <?php }?>

                <?php if ($kopi) { ?>
                <tr>
                    <td><label for="kopi">Jumlah Kopi</label></td>
                    <td>:</td>
                    <td><input type="number" name="kopi" id="kopi"></td>
                </tr>
                <?php }?>

                <?php if ($teh_manis) { ?>
                <tr>
                    <td><label for="teh_manis">Jumlah Teh Manis</label></td>
                    <td>:</td>
                    <td><input type="number" name="teh_manis" id="teh_manis"></td>
                </tr>
                <?php }?>

                <?php if ($lemon_tea) { ?>
                <tr>
                    <td><label for="lemon_tea">Jumlah Lemon Tea</label></td>
                    <td>:</td>
                    <td><input type="number" name="lemon_tea" id="lemon_tea"></td>
                </tr>
                <?php }?>

            </table>
            <br>
            <button type="submit" name="hitung">Hitung</button>
        </form>
        <br>
        <?php echo $pesan;
        ?>

        <br><br>
        <a href="index.php">&laquo; Kembali ke daftar menu</a>
    </body>
</html>