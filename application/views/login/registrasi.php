<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:08:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistem Informasi Cuti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Kero HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="<?= base_url(); ?>css/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Selamat Datang di SI CUTI</div>
                                            <span>Verifikasi Pegawai</span>
                                        </h4>
                                    </div>
                                    <form class="" action="<?= base_url(); ?>login/tbhUser" method="post">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <p class="mb-2"><strong>Identitas Anda :</strong></p>
                                                <p class="mb-1">Nama : <?php echo $this->session->userdata('nama_pns'); ?></p>
                                                <p class="mb-2">NIP : <?php echo $this->session->userdata('nip'); ?></p>
                                                <p class="mb-2">No Telp : <?php echo $this->session->userdata('no_hp'); ?></p>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left"><a href="<?= base_url(); ?>/login/logout" class="btn-lg btn btn-link">Kembali</a></div>
                                    <div class="float-right">
                                        <a href="<?= base_url('pegawai/formPengajuan'); ?>" class="btn btn-primary btn-lg">Proses</a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url(); ?>assets/scripts/main.07a59de7b920cd76b874.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:08:24 GMT -->

</html>