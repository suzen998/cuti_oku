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
                                            <div>SI CUTI</div>
                                            <span>Verifikasi Pegawai</span>
                                        </h4>
                                    </div>
                                    <form class="" action="<?php echo site_url('login/auth'); ?>" method="post">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="nip" id="exampleEmail" placeholder="NIP" type="" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="nama_pns" id="examplePassword" placeholder="Nama Pegawai" type="" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="no_hp" id="examplePassword" placeholder="No Telp" type="" class="form-control" required></div>
                                            </div>
                                        </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><a href="<?= base_url('admin/Overview/login'); ?>" class="btn-lg btn btn-link">ADMIN</a></div>
                                        <div class="col"><button class="btn btn-primary btn-lg float-right mb-3" type="submit">Validasi</button></div>
                                    </div>
                                    <!-- <div class="float-left"></div>
                                    <div class="float-right"> -->

                                </div>
                            </div>
                            </form>
                        </div>
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