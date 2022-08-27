<?php $this->load->view('layouts/header_admin'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-layer-group"></i> Package</h1>

    <a href="<?= base_url('Package'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
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
                <h6 class="m-0 font-weight-bold text-center"><?= $detail->nama ?></h6>
            </div>
        </div>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <?php foreach($sub_detail as $key => $value) : ?>
                    <tr>
                        <th class="bg-info text-white" width="43%"><?= $value->keterangan ?></th>
                        <td><?= $value->deskripsi ?></td>
                    </tr>
                    <?php endforeach; ?>
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
                <h6 class="m-0 font-weight-bold text-center"><?= $detail->nama ?></h6>
            </div>
        </div>
    </div>


    <div class="card-body">
        <form method="POST" action="<?= base_url('Package/simpan_deskripsi') ?>" >
            <div class="form-group">
                <label class="font-weight-bold">Deskripsi</label>
                <input type="hidden" name="id_package" value="<?= $detail->id_package ?>">
                <textarea autocomplete="off" type="text-area" name="detail_deskripsi" class="form-control" rows="5" <?php if ($this->session->userdata('id_user_level') == '2') : ?> disabled<?php endif; ?>><?= $detail->deskripsi ?></textarea>
            </div>

            <div class="text-right">
                <?php if ($this->session->userdata('id_user_level') == '1') : ?>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endif; ?>
            </div>
        </form>
    </div>

</div>






<?php $this->load->view('layouts/footer_admin'); ?>