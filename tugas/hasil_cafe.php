<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body style="background-image: url(https://wallpapercave.com/wp/wp2937416.jpg) ; color:white" >
        <?php if (isset($_POST['hitung'])) {
    $nasi_goreng = $_POST['nasi_goreng'];
    $mie_goreng = $_POST['mie_goreng'];
    $ayam_goreng = $_POST['ayam_goreng'];
    $sate = $_POST['sate'];
    $es_jeruk = $_POST['es_jeruk'];
    $kopi = $_POST['kopi'];
    $teh_manis = $_POST['teh_manis'];
    $lemon_tea = $_POST['lemon_tea'];

    $total_harga = 0;
}
        ?>

        <form method="post">
            <label><b>Detail Pesanan</b></label>
            <table>
                <?php if ($nasi_goreng) { ?>
                <tr>
                    <td><label for="nasi_goreng">Nasi Goreng</label></td>
                    <td>:</td>
                    <td><?php echo $nasi_goreng; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $nasi_goreng * 15000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $nasi_goreng * 15000; ?>
                <?php }?>


                <?php if ($mie_goreng) { ?>
                <tr>
                    <td><label for="mie_goreng">Mie Goreng</label></td>
                    <td>:</td>
                    <td><?php echo $mie_goreng; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $mie_goreng * 12000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $mie_goreng * 12000; ?>
                <?php }?>


                <?php if ($ayam_goreng) { ?>
                <tr>
                    <td><label for="ayam_goreng">Ayam Goreng</label></td>
                    <td>:</td>
                    <td><?php echo $ayam_goreng; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $ayam_goreng * 10000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $ayam_goreng * 10000; ?>
                <?php }?>


                <?php if ($sate) { ?>
                <tr>
                    <td><label for="sate">Sate</label></td>
                    <td>:</td>
                    <td><?php echo $sate; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $sate * 20000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $sate * 20000; ?>
                <?php }?>

                <?php if ($es_jeruk) { ?>
                <tr>
                    <td><label for="es_jeruk">Es Jeruk</label></td>
                    <td>:</td>
                    <td><?php echo $es_jeruk; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $es_jeruk * 8000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $es_jeruk * 8000; ?>
                <?php }?>


                <?php if ($kopi) { ?>
                <tr>
                    <td><label for="kopi">Kopi</label></td>
                    <td>:</td>
                    <td><?php echo $kopi; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $kopi * 12000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>
                

                <?php $total_harga += $kopi * 12000; ?>
                <?php }?>


                <?php if ($teh_manis) { ?>
                <tr>
                    <td><label for="teh_manis">Teh Manis</label></td>
                    <td>:</td>
                    <td><?php echo $teh_manis; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $teh_manis * 5000; ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="height: 4px;"></td>
                </tr>

                <?php $total_harga += $teh_manis * 5000; ?>
                <?php }?>


                <?php if ($lemon_tea) { ?>
                <tr>
                    <td><label for="lemon_tea">Lemon Tea</label></td>
                    <td>:</td>
                    <td><?php echo $lemon_tea; ?></td>
                </tr>

                <tr>
                    <td><label>Harga</label></td>
                    <td>:</td>
                    <td>Rp.<?php echo $lemon_tea * 8000; ?></td>
                </tr>

                <?php $total_harga += $lemon_tea * 8000; ?>
                <?php }?>

                <tr>
                    <td colspan="4" style="height: 10px;"></td>
                </tr>
                <tr>
                    <td><b><label for="lemon_tea">Total Harga</label></b></td>
                    <td>:</td>
                    <td><b>Rp.<?php echo $total_harga; ?></b></td>
                </tr>
            </table>
            <br>
            <input type="number" name="bayar" id="bayar">
            <button type="submit" name="bayar">Bayar</button>
        </form>
        <br>
        <?php echo $pesan;
        ?>

        <br><br>
        <a href="1.php">&laquo; Kembali ke daftar menu</a>
    </body>
</html>