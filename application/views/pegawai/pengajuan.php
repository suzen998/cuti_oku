<div class="mb-4">
<a class="btn btn-info btn-sm" role="button" href="<?= base_url(); ?>pegawai/formpengajuan/">Tambah Cuti</a>
</div>

<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Pengajuan Cuti
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No Surat Cuti</th>
                    <th>Alasan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($sguru)){$i=1;foreach ($sguru as $sguru) : ?>
                    <tr>
                        <td class="align-middle"><?= $i++ ?></td>
                        <td class="align-middle"><?= $sguru['id_survei_guru']; ?></td>
                        <td class="align-middle"><?= $sguru['tgl_mulai']; ?></td>
                        <td class="align-middle"><?= $sguru['tgl_selesai']; ?></td>
                        <td class="align-middle"><?= $sguru['tgl_selesai']; ?></td>
                        <td class="align-middle"><a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusAmpuan/"></a></td>
                        </td>
                    </tr>
                <?php endforeach; }?> 
                
                </tbody>
            </table>
        </div>
        
    </div>   