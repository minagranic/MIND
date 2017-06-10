<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tajanstveni Deda Mraz</title>

	<link href=<?php echo base_url() . "css/bootstrap.css"?> rel="stylesheet">
	<link href=<?php echo base_url() . "css/mindCSS.css"?>  rel="stylesheet">
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
</style>

<script type="text/javascript">
	function zatvoriGreske(ime) {
		$('#' + ime).slideToggle(400);
	}
</script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php 
				$this->load->view('includes/left-banner.php'); 
			?>
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
						      <li><a href="profileSeller.html">Moj Profil</a></li>
						      <li><a href="gallery.html">Galerija</a></li>
						      <li><a href="idea.html">Ideje</a></li>
						      <li><a href="contact.html">Kontakt</a></li>
						      <li class="active"><a href="#">Oglasi</a></li>
						    </ul>
						  </div>
						</nav>
					</div>

					<div class="row">
						<div id="oglasi" class="col-xs-6 col-md-7 col-lg-8">
							<div class="panel panel-default">
							  <div class="panel-body" align="center">
							   <span class="glyphicon glyphicon-user"></span>
							   <label>Moj profil</label>
							  </div>
							  <div class="panel-footer">
							  	<div class="row">
							  		<?php echo form_open_multipart('Reklamiranje/dodajReklamu');?>
								  		<div class="col-xs-12 col-sm-4" align="center">
									  		<div class="form-group">
									  			<label>Slika oglasa</label>
										  		<img src=<?php echo base_url() . "/slike/pictureIcon.png" ?> style="width:150px; height: 150px">
										  		<br>
										  		<br>
										  			<h4>Max. velicina 4MB</h4>
												<br>
										  			<input type="file" name="userfile" size="4096" />
										  		<?php 
											 		$this->load->view('includes/error.php'); 
											 	?>
										  	</div>
									  	</div>
									  	<div class="col-xs-12 col-sm-8" align="center">
										  	<form action="Reklamiranje/dodajReklamu" method="POST">
										  		<div class="form-group">
												  <label for="sel1">Datum Isteka Oglasa</label>
												   <input type="text" class="form-control" name="datumIsteka" placeholder="GGGG-MM-DD">
												</div>
												<div class="form-group">
												  <label for="sel1">Link Website-a</label>
												  <input type="text" class="form-control" name="website" placeholder="Unesite link svog website-a">
												</div>
												<div class="form-group">
												  <label for="sel1">Cena</label>
												  <input type="text" class="form-control" name="cena">
												</div>
												<div class="form-group" align="center">
													<input type="submit" value="Potvrdi Unos" align="center"></input>	
												</div>
											</form>
											<?php if ($this->session->flashdata('greske-oglas')): ?>
									 		<div id="greske-prodavac" class="alert alert-danger collapse in">
												<strong>GRESKA!</strong>
												<?php
													echo $this->session->flashdata('greske-oglas');
												?>
												<div align="center" style="margin-top: 5px;">
													<button type="button" class="btn btn-warning" onclick="zatvoriGreske('greske-prodavac')">Pokusajte ponovo</button>
												</div>
											</div>
										  <?php endif ?>
									  	</div>
								  	</form>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-xs-6 col-md-5 col-lg-4">
							<div class="panel panel-default">
								<div class="panel-body" align="center">
									<span class="glyphicon glyphicon-user"></span>
									<label>DexyCo</label>
								</div>
								<div class="panel-footer">
									<div class="row">
										<table class="table">
										    <tbody>
								  				<tr>
								  					<td class="data_left">PIB:</td>
								  					<td rowspan="4" align="center">
								  						<img id="profilePicture" src="./slike/profilnaSlika.png">
								  						<input type="button" value="Promeni sliku" align="center" style="margin-top: 5px"></input>
								  					</td>
								  				</tr>
								  				<tr>
								  					<td class="data_right">&nbsp;&nbsp; 5125415</td>
								  				</tr>
								  				<tr>
								  					<td class="data_left">Pol</td>
								  				</tr>
								  				<tr>
								  					<td class="data_right">&nbsp;&nbsp; Muski</td>
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
								  					<td colspan="2">
								  						<label for="sel1">Interesovanja</label>
														<select multiple class="form-control" id="sel1">
															<option>Automobili</option>
															<option>Knjige</option>
															<option>Vina</option>
														</select>
								  					</td>
								  				</tr>
							  				</tbody>
						  				</table>
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
			<?php 
				$this->load->view('includes/right-banner.php'); 
			?>
		</div>
	</div>
</body>
</html>