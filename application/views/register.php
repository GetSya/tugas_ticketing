<!DOCTYPE html>
<html>
<head>
  <title>
    Register Bus
  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				$("#modalAddUser").modal('show');
			});
			
			
			
			$("#formTambahUser").submit(function(e){
				e.preventDefault();
				var data_input = $(this).serialize();
				$.ajax({
					url:'<?=base_url()?>client/user_tambah',
					dataType:'json',
					method:'POST',
					data:data_input,
					success:function(res){
						var status = res.STATUS;
						if(status=="1")
						{
							window.location.assign('<?=base_url()?>');
						}
					}
				});
			});
		});
		
		</script>
</head>
<body class="bg-secondary">
<!--INI FORM POKOKNYA-->
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up<strong> Pengguna</strong></h5>
            <form id="formTambahUser">
              <div class="form-floating mb-3">
              <label for="floatingInput">Email Anda</label>
                <input type="email" required name="member_email" class="form-control" id="floatingInput" placeholder="Email">
              </div>
              <div class="form-floating mb-3">
              <label for="floatingInput">Username Anda</label>
                <input type="text" required name="username" class="form-control" id="floatingInput" placeholder="Username">
              </div>
              <div class="form-floating mb-3">
              <label for="floatingPassword">Password Anda</label>
                <input type="password" required name="member_password" class="form-control" id="floatingPassword" placeholder="Password">
              </div>
              <div class="form-floating mb-3">
              <label for="floatingInput">Nama Panjang Anda</label>
                <input type="text" required name="member_nama" class="form-control" id="floatingInput" placeholder="Nama">
              </div>
              <div class="form-floating mb-3">
              <label for="floatingInput">No Telepon</label>
                <input type="number" required name="member_phone" class="form-control" id="floatingInput" placeholder="No Telepon">
              </div>
              <div class="form-floating mb-3">
              <label for="floatingInput">Pilih Gender Kamu</label>
                <select class="form-control" name="member_gender" id="">
                  <option value="L">Laki Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login fw-bold" type="submit">Register</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <a href="<?php echo base_url()?>" class="btn btn-primary btn-login fw-bold" >
                  <i class="fas fa-reply"></i> Login
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
