<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
</style>

<script type="text/javascript">
	
</script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-0 col-sm-0 col-md-2">
				<div id="leftBanner" class="row banner">
					<img src="./slike/nonstopshop.png">
					<img src="./slike/idealan.png">
					<img src="./slike/ludPoklon.png">
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
						      	<img src="./slike/logoTekst.png" style="height: 60px; margin: 0 auto">
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
						      <li class="active"><a href="#">Moj Profil</a></li>
						      <li><a href="gallery.html">Galerija</a></li>
						      <li><a href="idea.html">Ideje</a></li>
						      <li><a href="contact.html">Kontakt</a></li>
						      <li><a href="advertisement.html">Oglasi</a></li>
						    </ul>
						  </div>
						</nav>
					</div>

					<div class="row">
						<div class="col-xs-12 padding-5">
							<div class="panel panel-default">
							  <div class="panel-body" align="center">
							   <span class="glyphicon glyphicon-user"></span>
							   <label>Profil prodavca</label>
							  </div>
							  <div class="panel-footer">
							  	<div class="row">
							  		<div class="col-xs-12 col-sm-3" align="center">
								  		<div class="form-group">
									  		<img src="./slike/profilnaSlika.png" style="width:150px; height: 150px">
									  		<input type="button" value="Promeni sliku" align="center"></input>
									  		<h4>Max. velicina 4MB</h4>
									  	</div>
								  	</div>
								  	<div class="col-xs-12 col-sm-5"> 
								  		<form>
									  		<table class="table table-hover">
											    <tbody>
												    <tr>
									  					<td class="data_left">Naziv:</td>
									  					<td class="data_right">DexyCo</td>
									  				</tr>
									  				<tr>
									  					<td class="data_left">PIB:</td>
									  					<td class="data_right">5125415</td>
									  				</tr>
									  				<tr>
									  					<td class="data_left">Email:</td>
									  					<td class="data_right">info@dexyco.rs</td>
									  				</tr>
									  				<tr>
									  					<td class="data_left">Adresa:</td>
									  					<td class="data_right">Bulevar Arsenija Carnojevica 15</td>
									  				</tr>
									  				<tr>
									  					<td class="data_left">Kontakt telefon:</td>
									  					<td class="data_right">+381 11 333 5244</td>
									  				</tr>
									  				<tr>
									  					<td colspan="2" align="center">
									  						<input type="button" value="Radi na profilu"></input>
									  					</td>
								  					</tr>
											    </tbody>
										  	</table>
								  		</form>
								  	</div>
								  	<div class="col-xs-12 col-sm-4">
								  		<form>
										    <div class="form-group">
										      <label for="sel1">Interesovanja</label>
											  <select multiple class="form-control" id="sel1">
											    <option>Automobili</option>
											    <option>Knjige</option>
											    <option>Vina</option>
											  </select>
										      <br>
										      <input type="button" value="Dodaj interesovanja"></input>
										    </div>
										</form>
								  	</div>
							  	</div>
							  </div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row bottomBanner">
					<img src="./slike/poklonshop.png">
				</div>
			</div>
			<div class="col-xs-0 col-sm-0 col-md-2">
				<div id="rightBanner" class="row banner">
					<img src="./slike/nonstopshop.png">
					<img src="./slike/idealan.png">
					<img src="./slike/ludPoklon.png">
				</div>
			</div>
		</div>
	</div>
</body>
</html>