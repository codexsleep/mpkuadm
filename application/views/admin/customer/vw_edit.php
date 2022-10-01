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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Customer</a></li>
                                <li class="breadcrumb-item active">All</li>
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
                                <div class="col-md-6">
                                    <label class="form-label">Nama Customer</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="inputGroupPrepend" value="<?= $customer['customer_name'];?>" required>
                                        <div class="invalid-feedback">
                                            Nama customer harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No Hp</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="nohp" id="nohp" aria-describedby="inputGroupPrepend" value="<?= $customer['customer_phonenumber'];?>" required>
                                        <div class="invalid-feedback">
                                        No Hp customer harus di isi.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="jeniskelamin1" name="jeniskelamin" value="laki-laki" <?php if($customer['customer_sex']=='laki-laki'){ echo "checked";}?> required>
                                        <label class="form-check-label" for="jeniskelamin1">Laki-laki</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="radio" class="form-check-input" id="jeniskelamin2" name="jeniskelamin" value="perempuan" <?php if($customer['customer_sex']=='perempuan'){ echo "checked";}?> required>
                                        <label class="form-check-label" for="jeniskelamin2">Perempuan</label>
                                        <div class="invalid-feedback">Jenis kelamin harus di isi</div>
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