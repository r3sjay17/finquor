<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Error - FinQuor</title>

	<link rel="icon" href="<?=base_url('assets/img/logo.png')?>">
	<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body style="margin: 0;padding: 0;width: 100%;height: 100%; background-image: -webkit-linear-gradient(135deg,#64b2b2 42%,#fff 0);
background-repeat: no-repeat; font-family: 'Montserrat',sans-serif;">
	<div class="wrapper" style="background-image: url(<?=base_url('assets/img/contact-bg.png')?>);background-size: cover;height: 100%;min-height: 100vh;">
		<div class="error-holder" style="text-align: center;top: 20%;left: 0;right: 0;position: absolute;padding: 2%;color: #fff;width: 70%;margin: 0 auto;overflow: hidden;background: #831313b3;">
			<div style="display: inline-block;color: #f3f3f3;">
				<h2 style="font-size: 8vw;margin: 0;text-transform: uppercase;">Error</h2>
			</div>
			<p style="font-size: 2vw;margin: 0;text-transform: uppercase;line-height: 1;letter-spacing: 2px;">Something went wrong.</p>

			<div>
				<a href="<?=base_url()?>" style="background: rgb(0, 128, 128);border: 2px solid #077575;border-radius: 15px;padding: 10px 10%;color: #fff;position: relative;margin: 5%;font-size: 1.2em; text-decoration: none; display: inline-block;">Back to Home</a>
			</div>
		</div>
	</div>
</body>
</html>