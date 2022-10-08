<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><?= $title; ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Toko</a></li>
                                <li class="breadcrumb-item active">Tambah</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                                <div class="col-md-12">
                                    <label class="form-label">Nama Toko</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="inputGroupPrepend" placeholder="Masukkan nama toko" required>
                                        <div class="invalid-feedback">
                                            Nama toko harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Kategori</label>
                                    <div class="input-group has-validation">
                                        <select class="form-control" name="kategori" id="kategori" aria-describedby="inputGroupPrepend" required>
                                            <option value="">Pilih kategori</option>
                                            <?php
                                            foreach ($category as $kategori) {
                                            ?>
                                                <option value="<?= $kategori['category_id']; ?>"><?= $kategori['category_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Kategori harus di pilih.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Provinsi</label>
                                    <div class="input-group has-validation">
                                        <select class="form-control" name="provinsi" id="provinsi" aria-describedby="inputGroupPrepend" required>
                                            <option value="">Pilih Provinsi</option>
                                            <?php
                                            foreach ($state as $provinsi) {
                                            ?>
                                                <option value="<?= $provinsi['state_id']; ?>"><?= $provinsi['state_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Provinsi harus di pilih.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kota</label>
                                    <div class="input-group has-validation">
                                        <select class="form-control" name="kota" id="kota" aria-describedby="inputGroupPrepend" required>
                                            <option value="">Pilih Kota</option>
                                            <?php
                                            foreach ($city as $kota) {
                                            ?>
                                                <option value="<?= $kota['id']; ?>"><?= $kota['name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Kota harus di pilih.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Alamat</label>
                                    <div class="input-group has-validation">
                                        <textarea class="form-control" name="alamat" id="alamat" aria-describedby="inputGroupPrepend" placeholder="Masukkan alamat toko" required></textarea>
                                        <div class="invalid-feedback">
                                            Alamat harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Owner</label>
                                    <div class="input-group has-validation">
                                        <select class="form-control" name="owner" id="owner" aria-describedby="inputGroupPrepend" required>
                                            <option value="">Pilih owner toko</option>
                                            <?php
                                            foreach ($customer as $owner) {
                                            ?>
                                                <option value="<?= $owner['customer_id']; ?>"><?= $owner['customer_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Owner harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Aplikasi</label>
                                    <div class="input-group has-validation">
                                        <select class="form-control" name="aplikasi" id="aplikasi" aria-describedby="inputGroupPrepend" required>
                                            <option value="">Pilih aplikasi</option>
                                            <?php
                                            foreach ($appl as $aplikasi) {
                                            ?>
                                                <option value="<?= $aplikasi['app_id']; ?>"><?= $aplikasi['app_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Aplikasi harus di pilih.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Teknisi</label>
                                    <div class="input-group has-validation">
                                        <!-- Base Example -->
                                        <div style="overflow-y:scroll;height:150px; width:100%;">
                                            <?php
                                            foreach ($staff as $teknisi) {
                                            ?>
                                                <div class="form-check">
                                                    <label>
                                                        <input class="form-check-input" type="checkbox" name="teknisi[]" value="<?= $teknisi['user_id']; ?>"> <?= $teknisi['user_name']; ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="invalid-feedback">
                                            Teknisi harus di pilih.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Referensi</label>
                                    <input type="text" class="form-control" name="referensi" id="referensi" aria-describedby="inputGroupPrepend" placeholder="Masukkan referensi">

                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Tanggal Pemasangan</label>
                                    <div class="input-group has-validation">
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" aria-describedby="inputGroupPrepend" placeholder="Masukkan tanggal pemasangan" required>
                                        <div class="invalid-feedback">
                                            Tanggal harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                                </div>
                            </form>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- End Page-content -->