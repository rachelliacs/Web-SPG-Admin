<div class="container">
    <?php
    include "koneksi.php";
    if (isset($_GET['page'])) {
        @$aksi = $_GET['aksi'];
        switch ($aksi) {
            default:
                $query = "SELECT * FROM tbl_artikel";
                $hasil = mysqli_query($koneksi, $query);
    ?>
    <section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container mt-5">
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Manage</li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <form>
                <div class="d-flex flex-column align-items-end mt-auto mb-auto">
                    <button type="button" class="button2">
                        <span class="button1__icon">
                            <ion-icon name="add"></ion-icon>
                        </span>
                        <span class="button1__text"><a href="?page=artikel&aksi=add">Tambah</a></span>
                    </button>
                </div>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Isi Artikel</th>
                            <th>Tanggal Upload</th>
                            <th>Penulis</th>
                            <th colspan="3">Action</th>
                        </tr> 
                    </thead>
                    <?php
                    $no=1;
                    while ($data = mysqli_fetch_array($hasil)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><?php echo $data['content']; ?></td>
                            <td><?php echo $data['tgl_upload']; ?></td>
                            <td><?php echo $data['writer']; ?></td>
                            <td><a class="a1" href="?page=artikel&aksi=view&id=<?php echo $data['id']; ?>">Lihat</a></td>
                            <td><a class="a1" href="?page=artikel&aksi=update&id=<?php echo $data['id']; ?>">Edit</a></td>
                            <td><a class="a1" href="?page=artikel&aksi=delete&id=<?php echo $data['id']; ?>" onclick="returnconfirm('apakah anda yakin menghapus data?')">Hapus</a></td>
                    </tbody>
                    <?php 
                    }
                    ?>
                </table>
    <?php 
    break;
    case 'add':
        include "page/add.php";
        break;
    case 'view':
        include "page/view.php";
        break;
    case 'update':
        include "page/update.php";
        break;
    case 'delete':
        include "page/delete.php";
        break;
    }
    }
    ?>
            </form>
        </div>
    </section>
</div>
