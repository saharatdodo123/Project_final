<!doctype html>
<html lang="en">

<head>
	<title>Photographer Gallery</title>
	<link rel="icon" href="<?php echo base_url('img'); ?>/icon.png" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_headeradmin.css">
	<link rel="stylesheet" href="<?php echo base_url('public'); ?>/history.css">
</head>

<body>

	<div class="d-flex align-items-stretch">
		<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
			<div class="p-4">
				<center>
					<h3><a href="<?php echo site_url('Admin_Controller/home_admin') ?>" class="logo" style="color: #fff;">PHOTOGRAPHER<br>GALLERY</span></a></h3>
				</center>
				<ul class="list-unstyled components mb-5">
					<li>
						<center>
							<span class="fa fa-user mr-3"></span>
							<a href="#">Status : Admin</a>
						</center>
					</li>
					<li>
						<a href="<?php echo site_url('Admin_Controller/home_admin') ?>"><span class="fa fa-home mr-3"></span> โปรไฟล์</a>
					</li>
					<li>
						<a href="<?php echo site_url('Contract_Controller/history_contract_admin') ?>"><span class="fa fa-sticky-note mr-3"></span> รายการทั้งหมด</a>
					</li>
					<li>
						<a href="<?php echo site_url('Contract_Controller/history_paymentcheck_admin') ?>"><span class="fa fa-plane mr-3"></span> รอดำเนินการ</a>
					</li>
					<li>
						<a href="<?php echo site_url('Admin_Controller/register_admin') ?>"><span class="fa fa-paper-plane mr-3"></span> เพิ่มผู้ดูแลระบบ</a>
					</li>
					<li>
						<a href="<?php echo site_url('Admin_Controller/logout') ?>"><span class="fa fa-cogs mr-3"></span> ออกจากระบบ</a>
					</li>
				</ul>
				<br><br>
				<div class="footer">
					<p>
						<center>
							Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script> <br>
							Photographer Gallery <br>
							สงวนสิทธิ์ทุกประการ
						</center>
					</p>
				</div>
				<br><br><br><br><br>
			</div>
		</nav>