<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Login</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>media/icon.PNG" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Custom fonts for this template-->
     <link href="<?php echo base_url() ?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Untuk sistem login -->

    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			
			$("#formLogin").submit(function(e){
				e.preventDefault();
				var nilai = $(this).serialize();
				$.ajax({
					url:'<?=base_url()?>admin/master/ceklogin',
					method:'POST',
					data:nilai,
					dataType:'json',
					success:function(res){
						var status = res.STATUS;
						if(status=="1")
						{
							location.reload();
						}
						else
						{
							alert(res.MESSAGE);
						}
					}
				});
				
			});
			
		});

		</script>
</head>
<body class="bg-primary">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In<b> Admin</b></h5>
            <form id="formLogin">
              <div class="form-floating mb-3">
                <label for="floatingInput">Username</label>
                <input type="text" name="username" required class="form-control" id="floatingInput" placeholder="Username">
              </div>
              <div class="form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login fw-bold" type="submit">Login</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <a href="<?php echo base_url()?>admin/master/register" class="btn btn-primary btn-login fw-bold" >
                  <i class="fas fa-user"></i> Register
                </a>
              </div>
            </form>
            <div class="text-left">
                <a href="<?php echo base_url()?>client" class="small">Login Sebagai Client</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>