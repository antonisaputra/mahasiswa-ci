<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Mahasiswa">Mahasiswa</a></li>
                <li class="breadcrumb-item active">Tambah Mahasiswa Mahasiswa</li>
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
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                                                <?= form_error('nama', '<p class="text-danger">', '</p>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="nim" class="form-label">NIM</label>
                                                <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan Nama">
                                                <?= form_error('nim', '<p class="text-danger">', '</p>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Nama">
                                                <?= form_error('alamat', '<p class="text-danger">', '</p>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>\
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Nama">
                                                <?= form_error('tanggal_lahir', '<p class="text-danger">', '</p>') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="my-3">
                                                <label for="foto" class="form-label">Foto</label>
                                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="my-3">
                                                <a href="<?= base_url(); ?>Mahasiswa" class="btn btn-danger"><i class="bi bi-skip-backward-fill"></i> Kembali</a>
                                                <button type="submit" class="btn btn-success"><i class="bi bi-sd-card"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                </div>
            </div>
    </section>

</main><!-- End #main -->