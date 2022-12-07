<div class="container">
    <?php 
    include "koneksi.php";
    $rank = $_GET['rank'];
    $query_lihat = "SELECT * FROM tbl_animasi WHERE rank='$rank';";
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
                        <li class="breadcrumb-item ">Siswa Diterima</li>
                        <li class="breadcrumb-item ">Jurusan</li>
                        <li class="breadcrumb-item ">Animasi</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <form>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th colspan="3">Rank</th>
                            <th colspan="3">Nama</th>
                            <th colspan="3">NISN</th>
                        </tr>
                    </thead>      
                    <tbody>
                        <tr>
                            <td colspan="3"><?php echo $data['rank']; ?></td>
                            <td colspan="3"><?php echo $data['nama']; ?></td>
                            <td colspan="3"><?php echo $data['nisn']; ?></td>
                        </tr>
                    </tbody> 
                    <thead>
                        <tr>
                            <th>Semester</th>
                            <th>PAI</th>
                            <th>PPKN</th>
                            <th>B.Ind</th>
                            <th>MTK</th>
                            <th>IPA</th>
                            <th>IPS</th>
                            <th>B. Ing</th>
                            <th>Rata - rata nilai</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td><?php echo $data['']; ?></td>
                            <td rowspan="6"><?php echo $data['rerataNilai']; ?></td>
                        </tr>
                    </tbody>   
                </table>
            <a class="a1" href="?jurusan=animasi">Kembali ke Daftar</a>
        </div>
    </section>
</div>