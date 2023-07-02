<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 col-lg-6 shadow-lg my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-m">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 font-weight-bold mb-4">Daftar Sekarang!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputName" placeholder="Your Name" name="nama">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username" name="username">
                                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-0 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                                    </div>
                                    <div class="col-sm-6 mb-0 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_2">
                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2">','</div') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>