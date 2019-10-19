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


<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-card card">
                        <div class="card-body">
                            <h5 class="card-title">Form Permohonan Cuti</h5>
                            <div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Cuti</th>
										<th>Tanggal Mulai</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pegawai as $p): ?>
									<tr>
										<td width="150">
											<?php echo $p->nama_pns ?>
										</td>
										<td>
											<?php echo $p->nip_baru ?>
										</td>
										<td>
                                            <?php echo $p->jabatan_id?>  
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/products/edit/'.$p->pns_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$p->pns) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>