<div class="container">
    <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container mt-5">
        <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Manage</li>
                        <li class="breadcrumb-item ">Artikel</li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
    
            <form method="POST" action="">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th colspan="3">Tambah Artikel</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr><input type="hidden" name="id"></tr>
                        <tr>
                            <th>Judul</th>
                            <td>:</td>
                            <td><input type="text" name="title"></td>
                        </tr>
                        <tr>
                            <th>Isi Artikel</th>
                            <td>:</td>
                            <td><input type="textarea" name="content"></input></td>
                        </tr>
                        <tr>
                            <th>Tanggal Upload</th>
                            <td>:</td>
                            <td><input type="date"></td>
                        </tr>
                        <tr>
                            <th>Penulis</th>
                            <td>:</td>
                            <td><input type="text" name="writer"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="d-flex flex-column align-items-end">
                                <input type="submit" name="submit" value="Tambahkan Artikel">
                            </td>
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
        @$tgl_upload = date('d-m-Y');
        @$writer = $_POST['writer'];
        @$submit = $_POST['submit'];
        if ($submit) {
            $query_insert = "INSERT INTO tbl_artikel VALUES ('','$title','$content','$tgl_upload','$writer');";
            $hasil = mysqli_query($koneksi, $query_insert);
            if ($hasil) {
                echo "Berhasil menambahkan artikel";
                // echo "<div><p class="alert alert-success text-center">Artikel berhasil ditambahkan</p></div>;";
                // header ('Location: ?page=artikel');
            } else {
                echo "Gagal menambahkan artikel";
            }
        }
        ?>
    </section>
</div>