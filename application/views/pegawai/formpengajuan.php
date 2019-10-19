

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

<div class="mb-4">
<a class="btn btn-info btn-sm" role="button" href="<?= base_url(); ?>pegawai/pengajuan">Batalkan</a>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">Form Permohonan Cuti</h5>
                            <form id="signupForm" class="col-md-10 mx-auto" action="<?php echo site_url('admin/addCuti'); ?>" method="post" novalidate="novalidate">

                                <div class="form-group">
                                    <label for="username">NIP / NIK</label>
                                    <div>
                                        <input name="nip_lama" id="exampleText" class="form-control" placeholder="" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Nama</label>
                                    <div>
                                        <input type="text" class="form-control" id="nama_pns" name="nama_pns" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Jabatan</label>
                                    <div>
                                        <input type="text" class="form-control" id="jabatan_id" name="nama" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Jenis Cuti</label>
                                    <select name="jenis_cuti" class="multiselect-dropdown form-control" required>
                                        <?php if (isset($jenis_cuti)) {
                                            foreach ($jenis_cuti as $jcuti) : ?>
                                                <option value="<?= $jcuti['jenis_cuti_id']; ?>"><?= $jcuti['jcuti_nama']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="lastname">Sisa Cuti Anda:</label>
                                        <div>
                                            <input type="text" class="form-control" name="daterange" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="username">Hari/Bulan/Tahun</label>
                                        <div>
                                            <input type="text" class="form-control" name="daterange" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="lastname">Durasi Cuti Yang Diambil</label>
                                        <div>
                                            <input type="text" class="form-control" name="daterange" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="username">Hari/Bulan/Tahun</label>
                                            <select name="jenis_cuti" class="multiselect-dropdown form-control" required>
                                                <option value="hari">Hari</option>
                                                <option value="bulan">Bulan</option>
                                                <option value="tahun">Tahun</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="row">
                                <div class="form-group col-3">
                                    <label for="lastname">Tanggal Mulai</label>
                                    <div>
                                        <input type="date" class="form-control" name="daterange" value="">
                                    </div>
                                </div>

                                <div class="form-group col-3">
                                    <label for="lastname">Tanggal Selesai</label>
                                    <div>
                                        <input type="date" class="form-control" name="daterange" value="">
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Alasan Cuti</label>
                                    <div>
                                        <textarea name="text" id="exampleText" class="form-control" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Kelengkapan</label>
                                </div>
                                    <div class="card-body">
                                        <table style="width: 50%;" id="example"
                                                class="table table-hover table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>File</th>
                                                <th>Keterangan</th>
                                                <th  class="align-middle"><a class="btn btn-info" role="button" href="<?= base_url(); ?>admin/hapusAmpuan/">Tambah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(isset($sguru)){$i=1;foreach ($sguru as $sguru) : ?>
                                                <!-- <tr>
                                                    <td class="align-middle"><?= $i++ ?></td>
                                                    <td class="align-middle"><?= $sguru['id_survei_guru']; ?></td>
                                                    <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAmpuan/"></a></td>
                                                    </td>
                                                </tr> -->
                                            <?php endforeach; }?> 
                                            </tbody>
                                        </table>
                                    </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right mb-3" name="submit" value="submit">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>