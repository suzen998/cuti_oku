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
        <h5 class="card-title">Tambah Data Jenis Cuti</h5>
        <form id="signupForm" class="mx-auto" action="<?= base_url('admin/Overview/tbhjeniscuti'); ?>" method="post" novalidate="novalidate">
            <div>
                <div class="form-group col-4 d-inline-block align-middle">
                    <div class="position-relative form-group">
                        <input name="jcuti_nama" id="" type="text" class="form-control" placeholder="Cuti..." required>
                    </div>
                    <div class="position-relative form-group">
                        <input name="quota" id="" type="numeric" class="form-control" placeholder="Quota..." required>
                    </div>
                    <div class="position-relative form-group">
                        <select name="periode" type="text" class="multiselect-dropdown form-control" required>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                        </select>
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
                    <th>Jenis Cuti</th>
                    <th>Quota</th>
                    <th>Keterangan Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($jenis_cuti as $jcuti) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $jcuti['jcuti_nama']; ?></td>
                        <td class="align-middle"><?= $jcuti['quota']; ?></td>
                        <td class="align-middle"><?= $jcuti['ket_waktu']; ?></td>
                        <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusKelas/<?= $jcuti['jenis_cuti_id']; ?>">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>