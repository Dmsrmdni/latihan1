<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body style="background-image: url(https://wallpapercave.com/wp/wp2937416.jpg) ; color:white" >
        <?php 
            if (isset($_POST["kirim"])){

                $destinasi = $_POST["destinasi"];

                switch ($destinasi) {
                    case '1':
                        $tiket = 10000;
                        $namaDestinasi = "Bukit Bintang";
                        break;

                    case '2':
                        $tiket = 15000;
                        $namaDestinasi = "Pantai Sadranan";
                        break;

                    case '3':
                        $tiket = 50000;
                        $namaDestinasi = "Candi Borobudur";
                        break;

                    case '4':
                        $tiket = 50000;
                        $namaDestinasi = "Candi Prambanan";
                        break;

                    case '5':
                        $tiket = 5000;
                        $namaDestinasi = "Keraton Yogyakarta";
                        break;

                    case '6':
                        $tiket = 5000;
                        $namaDestinasi = "Malioboro";
                        break;

                    case '8':
                        $tiket = 100000;
                        $namaDestinasi = "Goa Pindul";
                        break;

                    default:
                        $tiket = 0;
                        $namaDestinasi = "";
                        break;
                }

                $jumlah = $_POST["jumlah"];
                $total = $tiket * $jumlah;
                // diskon
                if ($jumlah >= 10) {
                    $diskon = 15;
                    $total = $total - ($total * ($diskon / 100));
                }elseif ($jumlah >= 8) {
                    $diskon = 10;
                    $total = $total - ($total * ($diskon / 100));
                }elseif ($jumlah >= 4) {
                    $diskon = 5;
                    $total = $total - ($total * ($diskon / 100));
                }else {
                    $diskon = 0;
                }
            }

            if (isset($_POST["hitung"])){
                $jumlah = $_POST["jumlah"];
                $diskon = $_POST["diskon"];
                $bayar = $_POST["bayar"];
                $total = $_POST["total"];
                $tiket = $_POST["tiket"];
                $namaDestinasi = $_POST["namaDestinasi"];
                $pesan = "";

                // bayar
                if ($bayar < $total) {
                    $pesan = "Uang anda kurang";
                }elseif ($bayar > $total) {
                    $uang = $bayar - $total;
                    $pesan = "kembalian anda : Rp.$uang";
                }else {
                    $pesan = "uang anda pas";
                }
            }
        ?>

        <form method="post">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <input type="hidden" name="diskon" value="<?php echo $diskon; ?>">
            <input type="hidden" name="namaDestinasi" value="<?php echo $namaDestinasi; ?>">
            <input type="hidden" name="tiket" value="<?php echo $tiket; ?>">
            
            <h2>HASIL</h2>

            <table>
                <tr>
                    <td>Tempat yang dikunjungi</td>
                    <td>:</td>
                    <td><?=$namaDestinasi?></td>
                </tr>
                <tr>
                    <td>Harga tiket</td>
                    <td>:</td>
                    <td>Rp. <?=$tiket?> /Orang</td>
                </tr>
                <tr>
                    <td>Jumlah tiket yang dipesan</td>
                    <td>:</td>
                    <td><?=$jumlah?></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td><?=$diskon?> %</td>
                </tr>
                <tr>
                    <td>Total harga</td>
                    <td>:</td>
                    <td><?=$total?></td>
                </tr>
                <tr>
                    <td style="height: 8px;"></td>
                </tr>
                <tr>
                    <td colspan="2"><label for="bayar">Total yang harus dibayar :</label></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="number" name="bayar" id="bayar"></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit" name="hitung">Bayar</button></td>
                </tr>
            </table>
        </form>
        <br>
        <?php 
            echo $pesan;
        ?>

        <br><br>
        <a href="index.php">&laquo; Kembali ke daftar menu</a>
    </body>
</html>
