<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - MyBus</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>media/icon.PNG" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fire"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><sup>My</sup>Ticketing</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url()?>admin/master/dashboard">
                    <i class="fas fa-cogs"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Informasi Bus
            </div>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/tipebus">
                    <i class="fas fa-info"></i>
                    <span>Tipe Bus</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/bus">
                    <i class="fas fa-bus"></i>
                    <span>Bus</span></a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                People
            </div>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/crew">
                <i class="fas fa-user-secret"></i>
                    <span>Crew Bus</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/member">
                    <i class="fas fa-user"></i>
                    <span>Member</span></a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Lokasi
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/lokasi">
				<i class="fas fa-location-arrow"></i>
                    <span>Lokasi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>admin/master/lokasitipe">
                    <i class="fas fa-map"></i>
                    <span>Lokasi Tipe</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;Me</span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets2/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() ?>admin/master/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">About My Ticketing</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?php echo base_url() ?>assets2/img/mybus.png" alt="">
                                    </div>
                                    <p>my Ticketing Adalah Aplikasi Penjualan Tiket Bis <strong>Yang Resmi</strong> Dan Sudah Mendapatkan Lisensi. <br><br></a>
                                </div>
                            </div>
                    
                    <hr>
                    <div class="row">
                    <div class="col-md-3">
                    <div class="card">
    <img class="card-img-top" src="<?php echo base_url()?>assets2/img/agramas.jpg" alt="...">
    <div class="card-body">
        <h5 class="card-title">Agra Mas</h5>
        <hr>
        <p class="card-text">PT Anugerah Mas, menjalankan bisnisnya sebagai Agra Mas dan Agra Icon adalah salah satu perusahaan Bus yang berasal dari Jakarta, Indonesia. Garasi sekaligus kantor pusat bus ini berada di Cipayung, Jakarta Timur dan memiliki kantor cabang di Karawang, Bogor, Yogyakarta, PATI dan Wonogiri..</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
    </div>
</div>
<br>
                    </div>
                    <div class="col-md-3">
                    <div class="card">
    <img class="card-img-top" src="<?php echo base_url()?>assets2/img/stj.jpg" alt="...">
    <div class="card-body">
        <h5 class="card-title">Sudiro Tungga Jaya</h5>
        <hr>
        <p class="card-text">Sudiro Tungga Jaya atau yang sering disingkat STJ ini adalah sebuah perusahaan otobus yang berasal dari Kota Magetan, Jawa Timur, dengan layanan transportasi umum antarkota. Pemiliknya yang bernama Agus Muhammad Syidik, pada awalnya mengelola bisnis penyalur minyak.</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
    </div>
</div>
<br>
                    </div>
                    <div class="col-md-3">
                    <div class="card">
    <img class="card-img-top" src="<?php echo base_url()?>assets2/img/hr.jpg" alt="...">
    <div class="card-body">
        <h5 class="card-title">PO. Haryanto</h5>
        <hr>
        <p class="card-text">PT Haryanto Motor Indonesia adalah sebuah perusahaan jasa angkutan penumpang darat dan pariwisata yang berasal dari Kabupaten Kudus, Jawa Tengah.</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
    </div>
</div>
<br>
                    </div>
                    <div class="col-md-3">
                    <div class="card">
    <img class="card-img-top" src="<?php echo base_url()?>assets2/img/gh.jpg" alt="...">
    <div class="card-body">
        <h5 class="card-title">Gunung Harta</h5>
        <hr>
        <p class="card-text">Gunung Harta Transport didirikan oleh I Wayan Sutika pada tahun 1993. Pada masa awal pendiriannya, Gunung Harta Transport hanya melayani trayek Antarkota Dalam Provinsi, seperti Denpasar-Gilimanuk. Barulah di tahun 1995, Gunung Harta Transport mulai membuka trayek Antarkota Antarprovinsi.</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
    </div>
</div>
                    </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>admin/master/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets2/js/sb-admin-2.min.js"></script>

</body>

</html>