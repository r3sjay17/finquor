<?php defined('BASEPATH') OR exit('No direct scipt access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>FinQuor Account Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;">
	<table width="100%" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td>
				<table style="border-collapse: collapse;" width="600" cellspacing="0" cellpadding="0" align="center">
					<tbody><tr>
						<td style="padding: 40px">
							<table width="100%" cellspacing="0" cellpadding="0">
								<tbody><tr>
									<td style="padding: 10px 0">Hello <?=$name?></td>
								</tr><tr>
									<td style="padding: 10px 0; text-align: justify;">
										To complete your registration and activate your account, please click "Verify" below
									</td>
								</tr><tr>
									<td colspan="2" style="text-align: center; height: 80px;"><a href="<?=$link?>" style="height: 50px;padding: 10px; border: 1px solid #b2b2b2; text-transform: uppercase; text-decoration: none;">Verify Account</a></td>
								</tr><tr>
									<td style="padding: 20px 0 0 0;">
										Best Regards,
									</td>
								</tr><tr>
									<td style="font-weight: 700;">
										FinQuor
									</td>
								</tr></tbody>
							</table>
						</td>
					</tr></tbody>
				</table>
			</td>
		</tr></tbody>
	</table>
</body>
</html>