<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

	<link rel="icon" href="<?=base_url('assets/images/logo.png')?>">

	<title>FinQuor</title>

	<!-- font style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo|Montserrat:400,800" rel="stylesheet">

	<!-- main style sheet -->
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/admin.min.css')?>">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="fq-menu-wrapper col-md-1">
				<div class="logo">
					<img src="<?=base_url('assets/images/logo.png')?>">
				</div>
				<ul class="fq-menu">
					<li class="menu-item">
						<a href="<?=base_url('admin')?>">
							<i class="fa fa-home"></i> 
							<span>Home</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/profile')?>">
							<i class="fa fa-user-o"></i>  
							<span>Profile</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/services')?>">
							<img src="<?=base_url('assets/images/logo.png')?>">  
							<span>Services</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/bookmarks')?>">
							<i class="fa fa-bookmark-o"></i>  
							<span>Bookmarks</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/notifications')?>">
							<i class="fa fa-bell-o"></i>  
							<span>Notifications</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/messages')?>">
							<i class="fa fa-envelope-o"></i>  
							<span>Messages</span>
						</a>
					</li>
				</ul>
				<ul class="fq-menu bottom-menu">
					<li class="menu-item">
						<a href="<?=base_url('admin/help-center')?>">
							<i class="fa fa-life-ring"></i>  
							<span>Help Center</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?=base_url('admin/settings')?>">
							<i class="fa fa-cog"></i>  
							<span>Settings</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="fq-body-wrapper col-md-8">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="body-content">
							<h3 class="title">FinQuor</h3>