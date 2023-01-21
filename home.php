<?php
include 'lib/library.php';
include 'koneksi.php';

$id_user = $_SESSION['id_user'];
$sql = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_user = '$id_user'");
$jumlah_catatan = mysqli_num_rows($sql);

?>

<div class="alert alert-cus">
    Hai, Selamat datang kembali <?php echo $nama;?> sedang dimana kamu sekarang? isi catatan dulu yuk!
    <a href="index.php?page=isi_data" style="padding-left: 8px">Menuju isi data</a>
</div>

<div? class="body text-center ">
    <p class="text-cus">Jumlah catatan anda: <b><?php echo $jumlah_catatan; ?></b></p>
</div?