<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
<?php endif; ?>


<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Data Jabatan</h5>
        <form id="signupForm" class="mx-auto" action="<?= base_url('admin/Overview/tbhjeniscuti'); ?>" method="post" novalidate="novalidate">
            <div>
                <div class="form-group col-4 d-inline-block align-middle">
                    <div class="position-relative form-group">
                        <input name="sub" id="" type="text" class="form-control" placeholder="Sub Jabatan" required>
                    </div>
                    <div class="position-relative form-group">
                        <input name="uraian" id="" type="text" class="form-control" placeholder="Uraian Jabatan" required>
                    </div>

                </div>
                <div class="form-group col-2 d-block align-middle">
                    <button type="submit" class="btn btn-primary align-middle" name="submit" value="Submit">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>


<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-reorder mr-3 text-muted opacity-6" style="font-size:16px"> </i>Daftar Jenis Cuti
        </div>
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Sub Jabatan</th>
                    <th>Uraian Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($jabatan as $jab) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $jab['sub_jabatan']; ?></td>
                        <td class="align-middle"><?= $jab['uraian']; ?></td>
                        <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusKelas/<?= $jab['jabatan_id']; ?>">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>