<?php
global $db1;
include("koneksi.php");
$no = 1;

$sqlsrv_query = "SELECT * FROM anggota ORDER BY id DESC"; // Corrected variable name
$sql = $db1->prepare($sqlsrv_query); // Use correct variable name
$sql->execute();
$res1 = $sql->get_result();

if ($res1->num_rows > 0) {
    while ($row = $res1->fetch_assoc()) {
        $id = $row['id'];
        $nama = $row['nama'];
        $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan';
        $alamat = $row['alamat'];
        $no_telp = $row['no_telp'];
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $nama ?></td>
            <td><?= $jenis_kelamin ?></td>
            <td><?= $alamat ?></td>
            <td><?= $no_telp ?></td>
            <td>
                <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                    <i class="fa fa-edit"></i>Edit
                </button>
                <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                    <i class="fa fa-trash"></i>Hapus
                </button>
            </td>
        </tr>
    <?php }
} else { ?>
    <tr>
        <td colspan="7">Tidak ada data ditemukan</td>
    </tr>
<?php } ?>
