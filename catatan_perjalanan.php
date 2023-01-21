<?php
include 'lib/library.php';

$id_user = $_SESSION['id_user'];
$sql = "SELECT * FROM catatan WHERE id_user = '$id_user'";
$listcatatan = $mysqli -> query ($sql);
$page=@$_GET['page'];
?>

<div class="card" style="margin-botton: 3 rem;">
    <div class="card-header bg-cus text-white">
        Data catatan perjalanan anda
    </div>
    <div class="card-body">
        <div class="table-resposive">
            <table id="data-table" class="table table-bordered">
                <thead>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        while ($catatan = $listcatatan->fetch_array()) { 
                    ?>
                    <tr>
                        <td><?= $catatan['tanggal'] ?></td>
                        <td><?= $catatan['waktu'] ?></td>
                        <td><?= $catatan['lokasi'] ?></td>
                        <td><?= $catatan['suhu'] ?></td>
                        <td>
                            <a href="index.php?page=edit&id_catatan=<?= $catatan['id_catatan']?>"
                                class="btn btn-warning">Edit</a>
                            <a href="delete.php?id_catatan=<?= $catatan["id_catatan"]; ?>"
                                class="btn btn-danger caption"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>