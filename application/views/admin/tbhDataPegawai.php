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

<div class="row">
    <div class="col-md-12">
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav pt-0 pb-3">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Single Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span>Multiple Data</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="container-fluid">
            <div class="form-row">
                <div class="col-lg-12">
                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Pegawai</h5>
                            <form id="signupForm" class="col-md-10 mx-auto needs-validation" action="<?php echo site_url('admin/Overview/tbhDataPegawai'); ?>" method="post">
                                <div class="form-group">
                                    <label for="username">Nama PNS</label>
                                    <div>
                                        <input type="text" class="form-control" id="nama_pns" name="nama_pns" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">NIP LAMA</label>
                                    <div>
                                        <input name="nip_lama" id="nip_lama" class="form-control" placeholder="" type="number" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">NIP BARU</label>
                                    <div>
                                        <input name="nip_baru" id="nip_baru" class="form-control" placeholder="" type="number" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Gelar Depan</label>
                                    <div>
                                        <input name="gelar_dpn" id="gelar_dpn" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Gelar Belakang</label>
                                    <div>
                                        <input name="gelar_blk" id="gelar_blk" class="form-control" placeholder="" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">NIK</label>
                                    <div>
                                        <input name="nik" id="nik" class="form-control" placeholder="" type="number" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">GOLONGAN ID</label>
                                    <div>
                                        <select name="gol_id" id="gol_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($golongan)) {
                                            foreach ($golongan as $gol) : ?>
                                                <option value="<?= $gol['gol_id']; ?>"><?= $gol['gol_ket']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">TEMPAT LAHIR</label>
                                    <div>
                                        <input name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">TANGGAL LAHIR</label>
                                    <div>
                                        <input name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="" type="date" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">JENIS KELAMIN</label>
                                    <div>
                                        <select name="gol_id" id="gol_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($jenis_kelamin)) {
                                            foreach ($jenis_kelamin as $jkel) : ?>
                                                <option value="<?= $jkel['jenis_kelamin']; ?>"><?= $jkel['jenis_kelamin']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">JENIS KAWIN</label>
                                    <div>
                                        <select name="jenis_kawin_id" id="jenis_kawin_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($jenis_kawin)) {
                                            foreach ($jenis_kawin as $jkawin) : ?>
                                                <option value="<?= $jkawin['jenis_kawin_id']; ?>"><?= $jkawin['jenis_kawin_nama']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">AGAMA</label>
                                    <div>
                                        <select name="agama_id" id="agama_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($agama)) {
                                            foreach ($agama as $agama) : ?>
                                                <option value="<?= $agama['agama_id']; ?>"><?= $agama['agama_nama']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">NO HP</label>
                                    <div>
                                        <input name="no_hp" id="no_hp" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">ALAMAT</label>
                                    <div>
                                        <input name="alamat" id="exampleText" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">JABATAN</label>
                                    <div>
                                        <select name="jabatan_id" id="jabatan_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($jabatan)) {
                                            foreach ($jabatan as $jabatan) : ?>
                                                <option value="<?= $jabatan['jabatan_id']; ?>"><?= $jabatan['uraian']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">JENIS PEGAWAI</label>
                                    <div>
                                        <input name="jenis_pegawai" id="jenis_pegawai" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">INSTANSI</label>
                                    <div>
                                        <select name="instansi_id" id="instansi_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($instansi)) {
                                            foreach ($instansi as $instansi) : ?>
                                                <option value="<?= $instansi['instansi_id']; ?>"><?= $instansi['instansi_nama']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">UNOR</label>
                                    <div>
                                        <select name="unor_id" id="unor_id" class="multiselect-dropdown form-control" required />
                                        <?php if (isset($unor)) {
                                            foreach ($unor as $unor) : ?>
                                                <option value="<?= $unor['unor_id']; ?>"><?= $unor['unor_nama']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">STATUS PNS</label>
                                    <div>
                                        <input name="status_pns" id="status_pns" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">KATEGORI</label>
                                    <div>
                                        <input name="kategori" id="kategori" class="form-control" placeholder="" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right mb-3" name="signup" value="Sign up">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data</h5>
                            <form id="signupForm" class="ml-2" action="<?php echo site_url('admin/tbhMultiDataSiswa'); ?>" method="post" novalidate="novalidate">

                                <div class="form-group">
                                    <label for="username">Kelas</label>
                                    <select name="kelas" class="multiselect-dropdown form-control col-2" required>
                                        <?php if (isset($kelas)) {
                                            foreach ($kelas as $kls) : ?>
                                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?> <?= $kls['jurusan']; ?> <?= $kls['sub']; ?></option>
                                        <?php endforeach;
                                        } ?>
                                    </select>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" id="dynamicSiswa">
                                        <tr>
                                            <td>
                                                <input type="text" name="siswa[]" placeholder="Nama Siswa" class="form-control name_list col-4 d-inline-block" required />
                                                <input type="number" name="nipd[]" placeholder="NIPD" class="form-control name_list col-2 d-inline-block" required />
                                                <input type="text" name="namaIbu[]" placeholder="Nama Ibu" class="form-control name_list col-4 d-inline-block" required />
                                            </td>
                                            <td><button type="button" name="addSiswa" id="addSiswa" class="btn btn-success">Add More</button></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-3 ml-4" name="signup" value="">Submit
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