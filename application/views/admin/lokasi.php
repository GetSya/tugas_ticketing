<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Crew</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>media/icon.PNG" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets2/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			
			$("#btnTambah").click(function(){
				$("#modalAddLokasi").modal('show');
			});
			
			
			
			$("#formTambahLokasi").submit(function(e){
				e.preventDefault();
				var data_input = $(this).serialize();
				$.ajax({
					url:'<?=base_url()?>admin/master/lokasi_tambah',
					dataType:'json',
					method:'POST',
					data:data_input,
					success:function(res){
						var status = res.STATUS;
						if(status=="1")
						{
							location.reload();
						}
					}
				});
			});
			
			$("#formUpdateLokasi").submit(function(e){
				e.preventDefault();
				var data_input = $(this).serialize();
				$.ajax({
					url:'<?=base_url()?>admin/master/lokasi_update',
					dataType:'json',
					method:'POST',
					data:data_input,
					success:function(res){
						var status = res.STATUS;
						if(status=="1")
						{
							location.reload();
						}
					}
				});
			});
			
			
		});
		
		
		
		
		function edit(id, nama, kordinat, tipeid, aktif)
		{
			$("#location_id").val(id);
			$("#location_nama").val(nama);
			$("#location_coordinate").val(kordinat);
			$("#loc_tipe_id").val(tipeid);
			
			if(aktif=="1")
			{
				$("#location_aktif").prop("checked",true);
			}
			else
			{
				$("#location_aktif").prop("checked",false);
			}
			
			
			$("#modalUpdateLokasi").modal('show');
		}
		
		
		</script>
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
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>admin/master/dashboard">
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
            <li class="nav-item active">
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
					<div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <button id="btnTambah" class="btn btn-primary">Tambah Lokasi</button>
                           
                            </div>
                            
                        <div class="card-body text-center">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Lokasi</th>
                                            <th>Kordinat</th>
                                            <th>Tipe ID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Lokasi</th>
                                            <th>Kordinat</th>
                                            <th>Tipe ID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
					$no = 1;
					foreach($lokasi as $res)
					{
						
						$aktif = $res->location_aktif;
						$merah = ($aktif=="0") ? "class='table-danger'" : "";
				?>
					<tr <?=$merah?>>
						<td><?=$no?></td>
						<td><?=$res->location_id?></td>
						<td><?=$res->location_nama?></td>
						<td><?=$res->location_coordinate?></td>
						<td><?=$res->loc_tipe_id?></td>
						<td><button class="btn btn-warning btn-sm" onclick="edit('<?=$res->location_id?>','<?=$res->location_nama?>','<?=$res->location_coordinate?>','<?=$res->loc_tipe_id?>','<?=$res->location_aktif?>')">EDIT</button></td>
					</tr>
				<?php
						$no++;
					}
				?>
                                    
                                    </tbody>
                                </table>
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

    <!-- The Modal -->
	<div class="modal" id="modalAddLokasi">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Tambah Data</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form id="formTambahLokasi">
						<div class="form-group">
							<label>ID</label>
							<input type="text" name="location_id" class="form-control" />
						</div>
						<div class="form-group">
							<label>Nama Lokasi</label>
							<input type="text" name="location_nama" class="form-control" />
						</div>
						<div class="form-group">
							<label>Koordinat Lokasi</label>
							<input type="number" name="location_coordinate" class="form-control" />
						</div>
						<div class="form-group">
							<label?>Tipe Lokasi Bus</label>
							<select class="form-control" required name="loc_tipe_id" id="">
							<option default value="">Pilih</option>
							<?php
							foreach($lokasi as $res)
							{
						?>
								<option value="<?=$res->loc_tipe_id?>"><?=$res->loc_tipe_id?></option>
								<?php
								}
							?>
							</select>
						</div>
						

						<br/>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-sm">Simpan Data</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
    
<!-- The Modal -->
<div class="modal" id="modalUpdateLokasi">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Edit Data</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form id="formUpdateLokasi">
                    <div class="form-group">
							<label>ID</label>
							<input type="text" id="location_id" name="location_id" class="form-control" />
						</div>
						<div class="form-group">
							<label>Nama Lokasi</label>
							<input type="text" id="location_nama" name="location_nama" class="form-control" />
						</div>
						<div class="form-group">
							<label>Koordinat Lokasi</label>
							<input type="text" id="location_coordinate" name="location_coordinate" class="form-control" />
						</div>
						<div class="form-group">
							<label?>Tipe Lokasi Bus</label>
							<select class="form-control" required name="loc_tipe_id" id="loc_tipe_id">
							<option default value="">Pilih</option>
							<?php
							foreach($lokasi as $res)
							{
						?>
								<option value="<?=$res->loc_tipe_id?>"><?=$res->loc_tipe_id?></option>
								<?php
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<input type="checkbox" id="location_aktif" name="location_aktif">
							<label for="location_aktif">Lokasi Aktif</label>
						</div>
						<br>
						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-sm">Simpan Data</button>
						</div>
					</form>
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