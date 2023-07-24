<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Mahasiswa">Mahasiswa</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-12 col-md-12">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Data Mahasiswa</h5>
                                <a href="<?= base_url(); ?>Mahasiswa/tambah_mahasiswa" class="btn btn-outline-primary">Tambah Mahasiswa</a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nim</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1; ?>
                                            <?php foreach ($mahasiswa as $mhs) : ?>
                                                <tr>
                                                    <th scope="row"><?= $nomor++; ?></th>
                                                    <td><?= $mhs->nama; ?></td>
                                                    <td><?= $mhs->nim; ?></td>
                                                    <td><?= $mhs->jenis_kelamin; ?></td>
                                                    <td><?= $mhs->alamat; ?></td>
                                                    <td><?= $mhs->tanggal_lahir; ?></td>
                                                    <td><?= $mhs->email; ?></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="" class="btn btn-warning">Edit</a>
                                                        <a href="" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                </div>
            </div>
    </section>

</main><!-- End #main -->