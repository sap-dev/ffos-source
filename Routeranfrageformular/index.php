<!DOCTYPE html> 
<html>
	<head>
		<title>Freifunk Nordwest - Routeranfrage</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-forms-red.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.modal.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="body">		
			<form action="send.php" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
				<header><img src="https://blog.nordwest.freifunk.net/wp-content/themes/freifunk-nordwest-wordpress-design/images/logo.png" width="10%" height="10%" style="vertical-align: middle;"> Freifunk Nordwest - Routeranfrage</header>
					
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" placeholder="Name">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-briefcase"></i>
								<input type="text" name="vorname" placeholder="Vorname">
							</label>
						</section>
					</div>
					
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" placeholder="E-mail">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="tel" name="telefon" placeholder="Telefon">
							</label>
						</section>
					</div>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="adress" name="adresse" placeholder="Adresse">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="ort" name="ort" placeholder="PLZ, Ort">
							</label>
						</section>
					</div>
				</fieldset>
					<fieldset>
						<div class="row">
						<section class="col col-12">
							Bitte klicken Sie auf ein Routerbild, um weitere Informationen zu erhalten!<br />
							<a href="#router1" class="modal-opener"><img src="http://osnabrueck.freifunk.net/wp-content/uploads/2015/01/841-1280_2.jpg" width="100" height="100" title="Klicken Sie hier für mehr Informationen"></a>
							&nbsp;&nbsp;<a href="#router2" class="modal-opener"><img src="http://osnabrueck.freifunk.net/wp-content/uploads/2015/01/841-1280_2.jpg" width="100" height="100" title="Klicken Sie hier für mehr Informationen"></a>
							&nbsp;&nbsp;<a href="#router3" class="modal-opener"><img src="http://osnabrueck.freifunk.net/wp-content/uploads/2015/01/TL-WDR3600-UN-V1-01.jpg" width="100" height="100" title="Klicken Sie hier für mehr Informationen"></a>
						</section>
						</div>
					</fieldset>
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="select">
								<select name="router">
									<option value="none" selected disabled>Router</option>
									<option value="tplinkwr841n">TP-Link WR841N - 20,00&euro;</option>
									<option value="tplinkwr841nd">TP-Link WR841ND - 25,00&euro;</option>
									<option value="tplinkwdr3600">TP-Link WDR3600 - 50,00&euro;</option>
								</select>
								<i></i>
							</label>
						</section>
						<section class="col col-6">
							<label class="select">
								<select name="menge">
									<option value="0" selected disabled>Anzahl</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
								<i></i>
							</label>
						</section>
					</div>
					<div class="row">
						<section class="col col-6">
							<label class="select">
								<select name="abholung">
									<option value="none" selected disabled>Abholung</option>
									<option value="abholung_ol">Abholung in Oldenburg +0,00 €</option>
									<option value="abolhung_os">Abholung in Osnabrück +0,00 €</option>
									<option value="versand">Versand innerhalb Deutschland +5,00 €</option>
								</select>
								<i></i>
							</label>
						</section>
						
					</div>
					
					
					<section>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="5" name="comment" placeholder="Kommentar zur Anfrage"></textarea>
							<br />
							Weitere Anfragen zu Routern können Sie jederzeit an sales@ffnw.de senden!
						</label>
					</section>					
				</fieldset>
				<footer>
					<button type="submit" class="button">Anfrage absenden</button>
					<div class="progress"></div>
				</footer>				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Vielen Dank für Ihre Anfrage!<br>Wir setzen uns zeitnah mit Ihnen in Verbindung!</p>
				</div>
			</form>			
		</div>
		
		
		<!-- ROUTER 1 MODAL -->
			<form action="" id="router1" class="sky-form sky-form-modal">
			<header>TP-Link WR841N</header>
			
			<fieldset>					
						<section>
					<div class="row">
					<?php
						include('routerdetails/wr841n.data');
					?>
					</div>
				</section>
			</fieldset>
			<footer>
				<a href="#" class="button button-secondary modal-closer">schliessen</a>
			</footer>
		</form>
		<!-- END ROUTER 1 -->
		<!-- ROUTER 2 MODAL -->
			<form action="" id="router2" class="sky-form sky-form-modal">
			<header>TP-Link WR841ND</header>
			
			<fieldset>					
						<section>
					<div class="row">
					<?php
						include('routerdetails/wr841nd.data');
					?>
					</div>
				</section>
			</fieldset>
			<footer>
				<a href="#" class="button button-secondary modal-closer">schliessen</a>
			</footer>
		</form>
		<!-- END ROUTER 2 -->
		<!-- ROUTER 2 MODAL -->
			<form action="" id="router3" class="sky-form sky-form-modal">
			<header>TP-Link WDR3600</header>
			
			<fieldset>					
						<section>
					<div class="row">
					<?php
						include('routerdetails/wdr3600.data');
					?>
					</div>
				</section>
			</fieldset>
			<footer>
				<a href="#" class="button button-secondary modal-closer">schliessen</a>
			</footer>
		</form>
		<!-- END ROUTER 2 -->
		<script type="text/javascript">
			$(function()
			{
				// Datepickers
				$('#start').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#finish').datepicker('option', 'minDate', selectedDate);
					}
				});
				$('#finish').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#start').datepicker('option', 'maxDate', selectedDate);
					}
				});
				
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						telefon:
						{
							required: true
						},
						adresse:
						{
							required: true
						},
						ort:
						{
							required: true
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Bitte geben Sie Ihren Namen ein'
						},
						email:
						{
							required: 'Bitte geben Sie Ihre Emailadresse ein',
							email: 'Ung&uuml;ltige Emailadresse'
						},
						telefon:
						{
							required: 'Bitte geben Sie Ihre Telefonnummer ein'
						},
						adresse:
						{
							required: 'Bitte geben Sie Ihre Adresse ein'
						},
						ort:
						{
							required: 'Bitte geben Sie PLZ, Ort ein'
						}
					},

					// Ajax form submition
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').addClass('button-uploading').attr('disabled', true);
							},
					    uploadProgress: function(event, position, total, percentComplete)
					    {
					    	$("#sky-form .progress").text(percentComplete + '%');
					    },
							success: function()
							{
								$("#sky-form").addClass('submited');
								$('#sky-form button[type="submit"]').removeClass('button-uploading').attr('disabled', false);
							}
						});
					},	
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script>
	</body>
</html>