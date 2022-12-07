<div class="container">
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $query_lihat = "SELECT * FROM tbl_artikel WHERE id='$id';";
    $hasil = mysqli_query ($koneksi, $query_lihat);
    $data = mysqli_fetch_array ($hasil);
    $no=1;
    ?>
    <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container mt-5">
        <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Manage</li>
                        <li class="breadcrumb-item ">Artikel</li>
                        <li class="breadcrumb-item active">Lihat Artikel</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <form>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal Upload</th>
                            <th>Penulis</th>
                        </tr>
                    </thead>      
                    <tbody>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><?php echo $data['content']; ?></td>
                            <td><?php echo $data['tgl_upload']; ?></td>
                            <td><?php echo $data['writer']; ?></td>
                        </tr>
                    </tbody> 
                </table>
            <a class="a1" href="?page=artikel">Kembali ke Data Artikel</a>
        </div>
    </section>
</div>