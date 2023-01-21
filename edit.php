<?php
include 'koneksi.php';

$id_catatan = $_GET['id_catatan'];
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>

<div class="card">
    <div class="card-header bg-cus text-white">
        FORM TAMBAH DATA CATATAN PERJALANAN
    </div>
    <div class="card-body py-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <?php echo @$alert;?>
                <form method="post" action="simpan_edit.php">
                    <input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
                    <div class="form-group">
                        <label>Tanggal Perjalanan</label>
                        <input value="<?= $value['tanggal'] ?>" name="tanggal" class="form-control mt-2 mb-4"
                            type="date" placeholder="Pilih Tanggal" required>
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input value="<?= $value['waktu'] ?>" name="waktu" class="form-control mt-2 mb-4" type="time"
                            placeholder="Pilih Waktu" required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Perjalanan</label>
                        <input value="<?= $value['lokasi'] ?>" name="lokasi" class="form-control mt-2 mb-4" type="text"
                            placeholder="Masukan Lokasi Perjalanan" required>
                    </div>
                    <div class="form-group">
                        <label>Suhu Tubuh</label>
                        <input value="<?= $value['suhu'] ?>" name="suhu" class="form-control mt-2 mb-4" type="text"
                            placeholder="Masukan Suhu Tubuh" required>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" class="btn btn-cus">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>