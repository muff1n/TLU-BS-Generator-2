<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bullshit Generator</title>
		<style>
			.btn-default {
				background-color: #3D2B1F !important;
			}
			h1, .h1 {
				color: #3D2B1F !important;
			}
			.form-control {
				color: #3D2B1F !important;
				text-align: center;	
			}
			#buymeabeer {
				position: absolute;
				right: 10px;
				bottom: 10px;
			}
		</style>
		<link rel="stylesheet" href="css/bootstrap.css" media="screen">
    	<link rel="stylesheet" href="css/bootswatch.min.css">
    	<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script language="JavaScript" type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div class="container" style="text-align: center;">
		<h1>Bullshit generator</h1><br>
		<input type="text" class="form-control" id="bullshitbox" style="font-size: 2em; height: 100px;"><br>
		<button id="generate" class="btn btn-default">Generate bullshit</button><br><br>
		<img src="img/bullshit.png" height="60">
		</div>
		<div id="buymeabeer">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
		">
		<input type="image" src="http://bullshit.muff1n.eu/img/beer.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		</div>
		<!--div id="content"></div-->	
	</body>
</html>