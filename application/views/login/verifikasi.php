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
    <title>SISTEM INFORMASI CUTI ONLINE</title>
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
                                        <h2 class="mt-2">
                                            <div>Verifikasi Pegawai</div>
                                        </h2>
                                    </div>
                                    <form class="" method="post" action="<?php echo base_url() . 'login/login'; ?>">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="nip" id="" placeholder="NIP" type="" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="password" id="" placeholder="Password" type="password" class="form-control" required></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-left"><a href="<?= base_url(); ?>/login/validasi" class="btn-lg btn btn-link">Register</a></div>
                                            <div class="float-right">
                                                <button class="btn btn-primary btn-lg" type="submit">Login</button>
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
    </div>
    <script type="text/javascript" src="<?= base_url(); ?>assets/scripts/main.07a59de7b920cd76b874.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:08:24 GMT -->

</html>