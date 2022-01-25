<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas</title>
    </head>
    <body style="background-image: url(https://wallpapercave.com/wp/wp2937416.jpg) ; color:white" >

        <!-- Bukit Bintang -->
        <?php if ($_POST["destinasi"] == "1") :?>
            <h3>Selamat Datang Di Bukit Bintang</h3>
        <?php endif;?>
        <!-- end Bukit BIntang -->

        <!-- Pantai Sadranan -->
        <?php if ($_POST["destinasi"] == "2") :?>
            <h3>Selamat Datang Di Pantai Sadranan</h3>
        <?php endif;?>
        <!-- end Pantai Sadranan -->

        <!-- Candi Borobudur -->
        <?php if ($_POST["destinasi"] == "3") :?>
            <h3>Selamat Datang Di Candi Borobudur</h3>
        <?php endif;?>
        <!-- end Candi Borobudur -->

        <!-- Candi Prambanan -->
        <?php if ($_POST["destinasi"] == "4") :?>
            <h3>Selamat Datang Di Candi Prambanan</h3>
        <?php endif;?>
        <!-- end end Candi Prambanan -->

        <!-- Keraton Yogyakarta -->
        <?php if ($_POST["destinasi"] == "5") :?>
            <h3>Selamat Datang Di Keraton Yogyakarta</h3>
        <?php endif;?>
        <!-- end Keraton Yogyakarta -->

        <!-- Malioboro -->
        <?php if ($_POST["destinasi"] == "6") :?>
            <h3>Selamat Datang Di Malioboro</h3>
        <?php endif;?>
        <!-- end Malioboro -->

        <!-- Pendopo Lawas -->
        <?php if ($_POST["destinasi"] == "7") :?>
            <h3>Selamat Datang Di Pendopo Lawas</h3>
        <?php endif;?>
        <!-- end Pendopo Lawas -->

        <!-- Goa Pindul -->
        <?php if ($_POST["destinasi"] == "8") :?>
            <h3>Selamat Datang Di Goa Pindul</h3>
        <?php endif;?>
        <!-- end Goa Pindul -->

        <?php if ($_POST["destinasi"] == "7") :?>
            <h4>Daftar menu</h4>
            <form action="jumlah_menu.php" method="post">
                <label><b>Makanan</b></label>
                <div style="padding-top: 10px;padding-bottom: 20px;">
                    <input type="hidden" name="destinasi" value="<?= $_POST['destinasi'];?>">
                    <input type="checkbox" id="nasi_goreng" name="nasi_goreng" value="nasi_goreng">
                    <label for="nasi_goreng"> Rp.15000 - Nasi Goreng</label><br>
                    <input type="checkbox" id="mie_goreng" name="mie_goreng" value="mie_goreng">
                    <label for="mie_goreng"> Rp.12000 - Mie Goreng</label><br>
                    <input type="checkbox" id="ayam_goreng" name="ayam_goreng" value="Boat">
                    <label for="ayam_goreng"> Rp.10000 - Ayam Goreng</label><br>
                    <input type="checkbox" id="sate" name="sate" value="Boat">
                    <label for="sate"> Rp.20000 - Sate</label><br>
                </div>

                <label><b>Minuman</b></label>
                <div style="padding-top: 10px; padding-bottom: 15px;">
                    <input type="hidden" name="destinasi" value="<?= $_POST['destinasi'];?>">
                    <input type="checkbox" id="es_jeruk" name="es_jeruk " value="es_jeruk">
                    <label for="es_jeruk"> Rp.8000 - Es Jeruk</label><br>
                    <input type="checkbox" id="kopi" name="kopi" value="kopi">
                    <label for="kopi"> Rp.12000 - Kopi</label><br>
                    <input type="checkbox" id="teh_manis" name="teh_manis" value="teh_manis">
                    <label for="teh_manis"> Rp.5000 - Teh Manis</label><br>
                    <input type="checkbox" id="lemon_tea" name="lemon_tea" value="lemon_tea">
                    <label for="lemon_tea"> Rp.8000 - Lemon Tea</label><br>
                </div>

                <button type="submit" name="pesan">Pesan</button>
            </form>

        <?php else:?>
            <form action="hasil.php" method="post">
                <input type="hidden" name="destinasi" value="<?= $_POST['destinasi'];?>">
                <table>
                    <tr>
                        <td><label for="jumlah">Jumlah tiket yang ingin dipesan</label></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="jumlah" id="jumlah" required></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="kirim">Kirim</button></td>
                    </tr>
                </table>
            </form>
        <?php endif;?>

        <br>
        <a href="index.php">&laquo; Kembali ke daftar menu</a>
    </body>
</html>
