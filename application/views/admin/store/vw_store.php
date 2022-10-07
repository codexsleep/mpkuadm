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
                                <li class="breadcrumb-item active">Toko</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?= $this->session->flashdata('message') ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="<?= base_url('admin/category/tambah'); ?>" type="button" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="sort" data-sort="id">#ID</th>
                                                <th class="sort" data-sort="customer_name">Nama</th>
                                                <th class="sort" data-sort="customer_name">Kategori</th>
                                                <th class="sort" data-sort="customer_name">Provinsi</th>
                                                <th class="sort" data-sort="customer_name">Kota</th>
                                                <th class="sort" data-sort="customer_name">Alamat</th>
                                                <th class="sort" data-sort="customer_name">Owner</th>
                                                <th class="sort" data-sort="customer_name">Aplikasi</th>
                                                <th class="sort" data-sort="customer_name">Teknisi</th>
                                                <th class="sort" data-sort="customer_name">Referensi</th>
                                                <th class="sort" data-sort="customer_name">Tgl Pemasangan</th>
                                                <th class="sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            foreach ($store as $value) {
                                            ?>
                                                <tr>
                                                    <td class="id"><?= $value['store_id']; ?></td>
                                                    <td class="customer_name"><?= $value['store_name']; ?></td>
                                                    <td class="customer_name"><?= $value['category_name']; ?></td>
                                                    <td class="customer_name"><?= $value['state_name']; ?></td>
                                                    <td class="customer_name"><?= $value['city_name']; ?></td>
                                                    <td class="customer_name"><?= $value['store_address']; ?></td>
                                                    <td class="customer_name"><?= $value['customer_name']; ?></td>
                                                    <td class="customer_name"><?= $value['app_name']; ?></td>
                                                    <td class="customer_name">
                                                        <?php
                                                        $split_tag = explode(",", $value['store_technician']);
                                                        $str = "";
                                                        foreach ($split_tag as $tag) {
                                                            $str .= $tag . ',';
                                                        }
                                                        $timGet = $this->Staff_model->getByMultipleId(substr($str, 0, -1));
                                                        $timResult = "";
                                                        foreach ($timGet as $userShow) {
                                                            $timResult .= $userShow['user_name'] . ', ';
                                                        }
                                                        echo substr($timResult, 0, -2);
                                                        ?></td>
                                                    <td class="customer_name"><?= $value['store_reference']; ?></td>
                                                    <td class="customer_name"><?= $value['installation_date']; ?></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="<?= base_url('admin/category/edit/') . $value['store_id']; ?>" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="<?= base_url('admin/category/delete/') . $value['store_id']; ?>" class="btn btn-sm btn-danger remove-item-btn">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                            </lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- End Page-content -->