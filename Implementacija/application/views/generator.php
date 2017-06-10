<!DOCTYPE html>
<html>
<head>
	<title>Tajanstveni Deda Mraz</title>

	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/mindCSS.css" rel="stylesheet">
	<meta charset="UTF-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	body {
		background: url('./slike/background.jpg');
		color: #ffffff;
	}
	#profilePicture {
	    zoom: 2;

	    display: block;
	    margin: auto;

	    height: auto;
	    max-height: 100%;

	    width: 70%;
	    max-width: 100%;
	}
	
	.table-title {
		text-align: center;
		background-color: #e60000; 
		color:white; 
		height: 30px; 
		font-size: 16px;
		border-top-left-radius: 7px;
		border-top-right-radius: 7px;
	}

	#generatorTable tbody {
		border: 2px solid #e60000;
		padding: 20px;
		max-height: 200px;
	}

	.my-button {
		border: 2px solid #e60000;
		border-radius: 7px;
		font-size: 14px;
	}

	.my-button:hover {
		cursor: pointer;
		font-weight: bold;
	}

	#generatorTable td {
		padding: 7px 10px 7px 20px;
		vertical-align: middle;
	}

	@media (max-width: 1200px) {
		.title {
			font-size: 20px;
		}
	}


	@media (max-width: 992px) {
		.title {
			font-size: 14px;
		}
	}
</style>

<script type="text/javascript">
	function addPlayer() {
		var broj = $("#generatorTable").children().length;
		$('#generatorTable tr:last').after('<tr>\
											<td class="data_left col-xs-2">Ime:</td>\
						  					<td class="data_right col-xs-4">\
						  						<input type="text" class="form-control" name="ime_' + broj + '" placeholder="Unesite ime">\
						  					</td>\
						  					<td class="data_left col-xs-2">Email:</td>\
						  					<td class="data_right col-xs-4">\
						  						<input type="text" class="form-control" name="email_' + broj + '" placeholder="Unesite email">\
						  					</td> \
					  					</tr>');
	}
</script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-0 col-sm-0 col-md-2">
				<div id="leftBanner" class="row banner">
					<img src="<?php echo base_url();?>/slike/nonstopshop.png">
					<img src="<?php echo base_url();?>/slike/idealan.png">
					<img src="<?php echo base_url();?>/slike/ludPoklon.png">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div id="main" class="col-xs-12">	
					<div class="row">
						<nav class="navbar navbar-inverse">
						  <div class="container-fluid">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>                        
						      </button>
						      <a href="#" class="navbar-left"><img src="./slike/animated_logo.gif"></a>
						      <a class="navbar-brand christmas" href="#" style="height: 100%; padding: 5px;">
						      	<img src="<?php echo base_url();?>/slike/logoTekst.png" style="height: 60px; margin: 0 auto">
						      </a>
						    </div>
						    <div class="collapse navbar-collapse" id="myNavbar">
						      <ul class="nav navbar-nav navbar-right">
						        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Odjavi se</a></li>
						      </ul>
						    </div>
						  </div>
						</nav>
					</div>

					<div class="row">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <ul class="nav navbar-nav">
						      <li><a href="profile.html">Moj Profil</a></li>
						      <li><a href="<?php echo base_url();?>Galerija">Galerija</a></li>
						      <li><a href="<?php echo base_url();?>Ideje">Ideje</a></li>
						      <li><a href="contact.html">Kontakt</a></li>
						      <li class="active"><a href="<?php echo base_url();?>Generators">Generator</a></li>
						    </ul>
						  </div>
						</nav>
					</div>

					<div class="row">
						<div id="generator" class="col-xs-12 col-md-7 col-lg-8">
							<div class="panel panel-default">
								<div class="panel-body" align="center">
									<span class="glyphicon glyphicon-user"></span>
									<label style="font-size: 22px;">Generator</label>
								</div>
								<div class="panel-footer">
									<div class="form-group">
								      <label class="title">Zelis da igras Tajanstvenog Deda mraza sa svojim prijateljima?</label>
									  <form name="generatorForm" method="POST" action="generators/generisiIgru">
										<table class="table" id="generatorTable">
											<thead>
												<th colspan="4" class="table-title">Unesite email adrese i imena igraca i mi cemo ih rasporediti za Vas</th>
											</thead>
											<tbody>
												<tr>
								  					<td class="data_left col-xs-2">Ime:</td>
								  					<td class="data_right col-xs-4">
								  						<input type="text" class="form-control" name="ime_0" placeholder="Unesite ime">
								  					</td>
								  					<td class="data_left col-xs-2">Email:</td>
								  					<td class="data_right col-xs-4">
								  						<input type="text" class="form-control" name="email_0" placeholder="Unesite email">
								  					</td>
								  				</tr>
								  				<tr>
								  					<td class="data_left col-xs-2">Ime:</td>
								  					<td class="data_right col-xs-4">
								  						<input type="text" class="form-control" name="ime_1" placeholder="Unesite ime">
								  					</td>
								  					<td class="data_left col-xs-2">Email:</td>
								  					<td class="data_right col-xs-4">
								  						<input type="text" class="form-control" name="email_1" placeholder="Unesite email">
								  					</td>
								  				</tr>
											</tbody>
										</table>
										<div class="row" style="margin-top: 20px">
											<div class="col-xs-1 col-md-2"></div>
											<div onclick="addPlayer()" class="col-xs-4 col-md-3 my-button" align="center">
												<span class="glyphicon glyphicon-plus"></span>
											    <span>Dodaj jos</span>
											</div>
											<div class="col-xs-2 col-md-2"></div>
											<div class="col-xs-4 col-md-3 my-button" align="center">
											    <span class="glyphicon glyphicon-send"></span>
											    <span onclick="generatorForm.submit()">Posalji</span>
											</div>
											<div class="col-xs-1 col-md-2"></div>
										</div>
									  </form>
								    </div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row bottomBanner">
					<img src="<?php echo base_url();?>/slike/poklonshop.png">
				</div>
			</div>
			<div class="col-xs-0 col-sm-0 col-md-2">
				<div id="rightBanner" class="row banner">
					<img src="<?php echo base_url();?>/slike/nonstopshop.png">
					<img src="<?php echo base_url();?>/slike/idealan.png">
					<img src="<?php echo base_url();?>/slike/ludPoklon.png">
				</div>
			</div>
		</div>
	</div>
</body>
</html>