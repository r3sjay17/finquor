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
							<div class="search-holder">
								<p>Good morning, Client! Have a great day ahead.</p>
								<div class="frm-grp">
									<input type="text" class="txt-srch frm-control" placeholder="Search or filter news and feeds">
									<button class="icn-hldr">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>

							<div class="ads-holder">
								<img src="<?=base_url('assets/images/laptop.jpg')?>">
							</div>

							<div class="main-holder">
								<div class="blog">
									<img src="<?=base_url('assets/images/laptop.jpg')?>">
									<div class="info-hldr">
										<h4>Business Mirror</h4>
										<span class="tmr">9 hrs ago</span>
										<button><i class="fa fa-ellipsis-h"></i></button>
									</div>
									<div class="link-holder">
										<a href="#" class="link">PHL end-June external debt dips slightly to $72.2 billion - BSP</a>
										<a href="#" class="bookmark"><i class="fa fa-bookmark-o"></i></a>
									</div>
								</div>

								<div class="blog">
									<img src="<?=base_url('assets/images/laptop.jpg')?>">
									<div class="info-hldr">
										<h4>Business Mirror</h4>
										<span class="tmr">9 hrs ago</span>
										<button><i class="fa fa-ellipsis-h"></i></button>
									</div>
									<div class="link-holder">
										<a href="#" class="link">PHL end-June external debt dips slightly to $72.2 billion - BSP</a>
										<a href="#" class="bookmark"><i class="fa fa-bookmark-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="user-info">
							<div class="info">
								<p class="name">User</p>
								<p class="type">Client</p>
							</div>
							<img src="<?=base_url('assets/images/client-logo.png')?>">
						</div>
					</div>
				</div>
			</div>

			<div class="fq-sidebard-wrapper col-md-3">
				<!-- stocks market -->
				<div class="stock">
					<img src="<?=base_url('assets/images/laptop.jpg')?>">
				</div>

				<!-- request notifications -->
				<div class="nfctns-hldr">
					<div class="notif">
						<div class="cntn">
							<img src="<?=base_url('assets/images/advisor-logo.png')?>" class="notif-img">
							<div class="details">
								<p class="msg">Jane wants to connect with you</p>
								<span class="dtls">Lorem ipsum dolor</span>
							</div>
						</div>
						<div class="actn">
							<a href="#" class="notif-btn acpt">
								<i class="fa fa-check-circle-o"></i>
								Accept
							</a>
							<a href="#" class="notif-btn ignr">
								<i class="fa fa-times-circle-o"></i>
								Ignore
							</a>
						</div>
					</div>
				</div>

				<!-- pinned threads -->
				<div class="wdgt pnnd-hldr">
					<div class="header">
						<h3 class="wdgt-title"><i class="fa fa-thumb-tack"></i> Pinned Threads</h3>
					</div>

					<!-- pinned content -->
					<div class="thrd">
						<div class="img-hldr">
							<img src="<?=base_url('assets/images/advisor-logo.png')?>" class="thrd-img">
						</div>
						<div class="info-hldr">
							<h4 class="p-name">John Doe</h4>
							<p class="info">Client, Life Insurance</p>
							<p class="msg">Lorem ipsum dolor sit amet...</p>
						</div>

						<div class="optns">
							<button><i class="fa fa-ellipsis-h"></i></button>
						</div>
					</div>

					<div class="thrd">
						<div class="img-hldr">
							<img src="<?=base_url('assets/images/advisor-logo.png')?>" class="thrd-img">
						</div>
						<div class="info-hldr">
							<h4 class="p-name">John Doe</h4>
							<p class="info">Client, Life Insurance</p>
							<p class="msg">Lorem ipsum dolor sit amet...</p>
						</div>

						<div class="optns">
							<button><i class="fa fa-ellipsis-h"></i></button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>