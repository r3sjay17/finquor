<?php defined('BASEPATH') OR exit('No direct scipt access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>FinQuor Inquiry</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;">
	<table width="100%" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td>
				<table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="center">
					<tbody>
						<tr>
							<td style="border-bottom: 1px solid #ccc;width: 35%;background: rgba(0,128,128,.9);padding: 10px;border-right: 1px solid #ccc; color: #fff">Name</td>
							<td style="border-bottom: 1px solid #ccc;padding: 10px;"><?=$name?></td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #ccc;width: 35%;background: rgba(0,128,128,.9);padding: 10px;border-right: 1px solid #ccc; color: #fff">Email</td>
							<td style="border-bottom: 1px solid #ccc;padding: 10px;"><?=$email?></td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #ccc;width: 35%;background: rgba(0,128,128,.9);padding: 10px;border-right: 1px solid #ccc; color: #fff">Subject of Inquiry</td>
							<td style="border-bottom: 1px solid #ccc;padding: 10px;"><?=$subject?></td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #ccc;width: 35%;background: rgba(0,128,128,.9);padding: 10px;border-right: 1px solid #ccc; color: #fff">Message</td>
							<td style="border-bottom: 1px solid #ccc;padding: 10px;"><?=$message?></td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr></tbody>
	</table>
</body>
</html>