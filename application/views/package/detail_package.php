<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-layer-group"></i> Package</h1>

</div>

<?= $this->session->flashdata('message'); ?>
<div class="card shadow mb-4">

    <div class="d-flex pt-3">
        <div class="col-md-5">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-eye"></i> Paket Wisata</h6>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card-header" style="background: #FFE601; color: black;">
                <h6 class="m-0 font-weight-bold text-center">Paket wisata 999</h6>
            </div>
        </div>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th class="bg-info text-white" width="43%">Transportasi</th>
                        <td>Toyota Avanza</td>
                    </tr>
                    <tr>
                        <th class="bg-info text-white">Range Biaya</th>
                        <td>1.700.000 - 2.000.000</td>
                    </tr>

                    <tr>
                        <th class="bg-info text-white">Lama Menginap</th>
                        <td>3 - 4 Hari</td>
                    </tr>
                    <tr>
                        <th class="bg-info text-white">Jumlah Destinasi</th>
                        <td>8 Destinasi</td>
                    </tr>
                    <tr>
                        <th class="bg-info text-white">Tempat Menginap</th>
                        <td>Hotel Haris</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">

    <div class="d-flex pt-3">
        <div class="col-md-5">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-info">Detail Paket Wisata</h6>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card-header" style="background: #FFE601; color: black;">
                <h6 class="m-0 font-weight-bold text-center">Paket wisata 999</h6>
            </div>
        </div>
    </div>


    <div class="card-body">
        <div class="form-group">
            <label class="font-weight-bold">Deskripsi</label>
            <textarea autocomplete="off" type="text-area" name="detail" class="form-control" rows="5" <?php if ($this->session->userdata('id_user_level') == '2') : ?> disabled<?php endif; ?>></textarea>
        </div>

        <div class="text-right">
            <?php if ($this->session->userdata('id_user_level') == '1') : ?>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <?php endif; ?>
        </div>
    </div>

</div>






<?php $this->load->view('layouts/footer_admin'); ?>