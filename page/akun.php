<section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container mt-5">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Profile Admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="container"> 
        <?php
        include "koneksi.php";
        if (isset($_GET['page'])) {
            @$aksi = $_GET['aksi'];
            switch ($aksi) {
                default:
                    $query = "SELECT * FROM tbl_admin";
                    $hasil = mysqli_query($koneksi, $query);
                    $data = mysqli_fetch_array($hasil)
        ?>
        <div class="container1">
            <div class="form-outer">
                <form>
                    <div class="page slide-page">
                        <table class="content-table mt-auto">
                            <thead>
                                <tr>
                                    <th colspan="3">Akun saya</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td><?php echo $data['username']; ?></td>
                            </tr>
                            <tr>
                                <th>password</th>
                                <td>:</td>
                                <td><?php echo $data['password']; ?></td>
                            </tr>
                        </table>
                        <div class="btns-group mt-auto">
                            <button class="btn btn-primary">Hapus</button>
                            <button class="btn btn-primary firstNext edit">Edit</button>
                        </div>
                    </div>
                    <div class="page">
                        <table class="content-table mt-3">
                            <thead>
                                <tr>
                                    <th colspan="3">Edit akun</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td><input type="text" id="username"></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>:</td>
                                <td><input type="text" id="password"></td>
                            </tr>
                        </table>
                        <div class="mt-auto text-end">
                            <button class="btn btn-primary submit w-50">Simpan</button>
                        </div>
                    </div>
        <?php 
                    
            }
        }
        ?>
                </form>
            </div>
        </div>
    </div>
</section>
