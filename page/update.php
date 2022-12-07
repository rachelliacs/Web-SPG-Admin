<div class="container">
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_artikel WHERE id='$id';";
    $hasil = mysqli_query ($koneksi, $query);
    $data = mysqli_fetch_array ($hasil);
    ?>
    <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container mt-5">
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Manage</li>
                        <li class="breadcrumb-item ">Artikel</li>
                        <li class="breadcrumb-item active">Edit Artikel</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <form method="POST" action="">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th colspan="3">Edit Artikel</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></tr>
                        <tr>
                            <td>Judul Artikel</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="title" value="<?php echo $data['title']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Isi Artikel</td>
                            <td>:</td>
                            <td>
                                <input type="textarea" name="content" value="<?php echo $data['content']; ?>"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Upload</td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_upload" value="<?php echo $data['tgl_upload']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Penulis</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="writer" value="<?php echo $data['writer']; ?>">
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td></td>
                            <td class="d-flex flex-column align-items-end"><input type="submit" name="submit" value="Update Artikel"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a class="a1" href="?page=artikel">Kembali ke Data Artikel</a>
        </div>
        <?php 
        include "koneksi.php";
        @$id = $_POST['id'];
        @$title = $_POST['title'];
        @$content = $_POST['content'];
        @$writer = $_POST['writer'];
        @$tgl_upload = date('d-m-Y');
        @$submit = $_POST['submit'];
        if ($submit) {
            $query_update = "UPDATE tbl_artikel SET title='$title', content='$content', tgl_upload='$tgl_upload', writer='$writer' WHERE id='$id';";
            $hasil = mysqli_query($koneksi, $query_update);
                if ($hasil) {
                    echo "Berhasil meng-update artikel";
                } else {
                    echo "Gagal meng-update artikel";
                }
        }
        ?>
    </section>
</div>