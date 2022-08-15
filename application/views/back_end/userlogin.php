<style>

body{

margin: 0;

padding: 0;

font-family: sans-serif;

background: url(bg.jpg); 

background-repeat: no-repeat;

background-size: cover;

}

.box{

width: 300px;

padding: 40px;

position: absolute;

top: 50%;

left: 50%;

transform: translate(-50%,-50%);

background: #191919;

text-align: center;

}

.box h1{

color: white;

text-transform: uppercase;

font-weight: 500;

}

.box input[type = "text"], .box input[type = "password"]{

border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{

width: 280px;

border-color: #2ecc71;

}



.box input[type = "submit"]

{

 border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #2ecc71;

padding: 14px 40px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;

cursor: pointer;

}



.box input[type = "submit"]:hover

{

background: #2ecc71;

}
</style>
<!DOCTYPE html>

<html>

<head>

 <title>Login Form</title>

 <link rel="stylesheet" href="style.css">

</head>

<body>
<link href="<?= base_url()?>assets/css/oel.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
		<script src="<?= base_url()?>assets/js/frontend.min.js"></script>
		<script src="<?= base_url()?>assets/js/main.js"></script>
<!-- Sholat--->
<script src="<?= base_url()?>assets/PrayTimes/PrayTimes.js"></script>

<form class="box" action="<?= base_url('back_end/login/proses_login_admin') ?>" method="post">

<h1>Login Here</h1>
<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p>
							<center><?php echo $this->session->flashdata('success'); ?></center>
						</p>
					</div>
				<?php } elseif ($this->session->flashdata('gagal')) { ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p>
							<center><?php echo $this->session->flashdata('gagal'); ?></center>
						</p>
					</div>
				<?php } ?>
				<input type="email" name="email" class="form-control" placeholder="Email" required="true">

				<input type="password" name="password" class="form-control" placeholder="Password" required="true">

				<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

</form>

</body>

</html>
