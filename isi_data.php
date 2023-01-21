<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    $sql = "INSERT INTO catatan (id_user , tanggal, waktu, lokasi, suhu) VALUES
            ('$id_user','$tanggal', '$waktu', '$lokasi', '$suhu')";

    $mysqli->query($sql) or die($mysqli->error);
}

if( isset($_POST["simpan"]) ) {
    echo "<script>
    alert ('Berhasil Menambahkan Catatan baru'); 
    </script>";
}
?>

<div class="card">
    <div class="card-header bg-cus text-white">
        FORM TAMBAH DATA CATATAN PERJALANAN
    </div>
    <div class="card-body py-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <?php echo @$alert;?>
                <form action="" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                    <label for="">Waktu</label>
                    <input type="time" name="waktu" class="form-control mt-2 mb-4" required>
                    <label for="">Lokasi yang dikunjungi</label>
                    <input type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                    <label for="">Suhu tubuh</label>
                    <input type="number" name="suhu" class="form-control mt-2 mb-4" required>
                    <div class="form-inline">
                        <button name="simpan" type="submit" class="btn btn-cus">Simpan</button>
                        <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>