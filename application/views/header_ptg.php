<!DOCTYPE html>
<html>

<head>
	<title>Photographer Gallery</title>
	<link rel="icon" href="<?php echo base_url('img'); ?>/icon.png" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
							<a href="#">Status : Photographer</a>
						</center>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/home_ptg') ?>"><span class="fa fa-home mr-3"></span> โปรไฟล์ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/add_picture') ?>"><span class="fa fa-picture-o mr-3"></span> เพิ่มรูปภาพ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/edit_profile') ?>"><span class="fa fa-user mr-3"></span> แก้ไขโปรไฟล์ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/edit_address') ?>"><span class="fa fa-map-marker mr-3"></span> แก้ไขที่อยู่ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/edit_electronicdevice') ?>"><span class="fa fa-camera-retro mr-3"></span> แก้ไขรายชื่ออุปกรณ์ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/edit_social') ?>"><span class="fa fa-rss-square mr-3"></span> แก้ไขช่องทางการติดต่อ </a>
					</li>
					<li>
						<a href="<?php echo site_url('Contract_Controller/history_transfercheck_ptg') ?>"><span class="fa fa-sticky-note mr-3"></span> รายการทั้งหมด</a>
					</li>
					<li>
						<a href="<?php echo site_url('Contract_Controller/history_ptg') ?>"><span class="fa fa-plane mr-3"></span> รอดำเนินการ</a>
					</li>
					<li>
						<a href="<?php echo site_url('Photographer_Controller/logout') ?>"><span class="fa fa-cogs mr-3"></span> ออกจากระบบ</a>
					</li>
				</ul>
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

			</div>
		</nav>