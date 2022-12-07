<div>
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $query_delete = "DELETE FROM tbl_artikel WHERE id='$id';";
    $hasil = mysqli_query($koneksi, $query_delete);
    if ($hasil) {
        header ('Location: ?page=artikel');
    } else {
        echo "Gagal menghapus data";
    }
    ?>
</div>