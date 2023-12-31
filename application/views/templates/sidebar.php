<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('') ?>">
                <div class="sidebar-brand-icon ">
                    <img class="img-profile rounded-circle" style="width: 40%;" src="https://i.postimg.cc/fJx9cH5C/calf-logo-white.png">
                    <!-- <i class="fas fa-store"></i> -->
                    <!-- <div class="sidebar-brand-text mx-3">Calf</div> -->
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('') ?>">
                    <i class="fas fa-list-ul"></i>
                    <span class="font-italic">Semua Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/coffee') ?>">
                    <i class="fa fa-mug-hot"></i>
                    <span class="font-italic font-weight-bolder">Coffee</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/milkbase') ?>">
                    <i class="fa fa-mug-hot"></i>
                    <span class="font-italic font-weight-bolder">MilkBase Non Coffee</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                                <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search Produk" aria-label="Search" aria-describedby="basic-addon2">
                                <?php echo form_open('barang/search') ?>
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Keranjang -->
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="btn btn-sm btn">
                                    <?php $keranjang = ' ' . $this->cart->total_items() . ' items' ?>
                                    <?php echo anchor('dashboard/detail_keranjang', '<div class="btn btn-sm btn-primary font-weight-bold font-italic"><i class="fas fa-shopping-cart"></i> ' . $keranjang . '</div>') ?>
                                </li>
                            </ul>
                            <!-- Validasi login  -->
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <ul class="nav navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div class="font-italic">Welcome! <?php echo $this->session->userdata('username') ?></div>
                                    </li>
                                    <li class="ml-2 mr-5 font-weight-bold"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                <?php } else { ?>
                                    <li class="ml-2 mr-5 font-weight-bold"><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->