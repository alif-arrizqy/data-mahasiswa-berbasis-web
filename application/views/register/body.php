<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url('assets/template/back/images') ?>/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url(). 'register/crud/tambah_aksi'; ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign up</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- vendor JS       -->
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/vendor') ?>/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/template/back/js') ?>/main.js"></script>