<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-layer-group"></i> Package</h1>
</div>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Daftar Data Package</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-info text-white">
                    <tr align="center">
                        <th width="5%">No</th>
                        <th>Alternatif</th>
                        <th>Nilai</th>
                        <th>Rangking</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // foreach ($alternatif as $keys) : 
                    ?>
                    <tr align="center">
                        <td><?= $no ?></td>
                        <td align="left">Paket Wisata 999</td>
                        <td>0.799999</td>
                        <td>1</td>
                        <td>
                            <a data-toggle="modal" class="btn btn-warning btn-sm"><i class="fa fa-edit text-white"></i></a>
                            <a class="btn btn-success btn-sm" href="<?= base_url('Package/detail') ?>"><i class="fa fa-eye text-white"></i></a>
                            <?php if ($this->session->userdata('id_user_level') == '1') : ?>
                                <a data-toggle="modal" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>


                    <?php
                    $no++;
                    // endforeach 
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->load->view('layouts/footer_admin'); ?>