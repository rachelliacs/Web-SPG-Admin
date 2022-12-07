<div class="container">
    <?php
    include "koneksi.php";
    if (isset($_GET['jurusan'])) {
        @$aksi = $_GET['aksi'];
        switch ($aksi) {
            default:
                $query = "SELECT * FROM tbl_animasi";
                $hasil = mysqli_query($koneksi, $query);
    ?>
    <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container mt-5">
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Manage</li>
                        <li class="breadcrumb-item ">Siswa Diterima</li>
                        <li class="breadcrumb-item ">Jurusan</li>
                        <li class="breadcrumb-item active">Animasi</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <form>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Nama</th>
                            <th>Nilai Rata-Rata</th>
                            <th colspan="3">Action</th>
                        </tr> 
                    </thead>
                    <?php
                    $no=1;
                    while ($data = mysqli_fetch_array($hasil)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['rerataNilai']; ?></td>
                            <td><a class="a1" href="?jurusan=animasi&aksi=view&rank=<?php echo $data['rank']; ?>">Lihat</a></td>
                            <td><a class="a1" href="?jurusan=animasi&aksi=update&id=<?php echo $data['rank']; ?>">Update</a></td>
                            <td><a class="a1" href="?jurusan=animasi&aksi=delete&id=<?php echo $data['rank']; ?>" onclick="returnconfirm('apakah anda yakin menghapus data?')">Delete</a></td>
                    </tbody>
                    <?php 
                    }
                    ?>
                </table>
    <?php 
    case 'view':
        include "jurusan/view.php";
        break;
    case 'update':
        include "jurusan/update.php";
        break;
    case 'delete':
        include "jurusan/delete.php";
        break;
    }
    }
    ?>
            </form>
        </div>
    </section>
</div>
