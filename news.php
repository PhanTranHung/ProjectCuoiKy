<!doctype html>
<html>
	<head>
		<title>Range Rover - Bán Xe Xịn</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="picture/logo.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/homepage.css">
		<link rel="stylesheet" type="text/css" href="css/products.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		
		<style>

			body {
				font-family: Landrover,Arial,Verdana,Helvetica,sans-serif;
				font-size: 16px;
			}
			
			@media (max-width: 768px){
				.carousel-ctn, .nav-content {
					display: none;
				}
				
				body {
					font-size: 14px;
				}
				
				.pic-tit {
					height: 250px;
				}
				
				.body-content section div {
					width: 100%;
					clear: both;
				}
				
				.titte-strong strong{
					font-size: 1.5rem;
				}
				
				.title-small-strong strong {
					font-size: 1.1rem;
				}
			}
			
			@media (max-width: 600px){
				.media_grid, .footer-left, .footer-right{
					width: 100%;
					padding-top: 2em;
				}
				
				.contact, .footer-right-content {
					position: relative;
				}
			}
			
			@media (min-width: 1050px){
				body {
					font-size: 16px;
				}
			}
		</style>
	</head>

	<body>
		<!--=-----------Header------------=-->
		
		<?php include 'header.php'; ?>
		
		<!--Content-->
		<div class="titte-strong">
			<strong>PROMOTIONS AND EVENTS</strong>
		</div>
		<div style="width: 100%; margin: 0%; padding: 0%;" onMouseOver="navDropdownOff()">
			<div class="body-content">
				<section class="clear-both">
					<div class="ctn-tng">
						<div>
							<img src="picture/Promotions & Events2.png" alt="">
						</div>
						<div class="title-small-strong"><strong>MERIDIAN™ SOUND</strong></div>
						<div class="btn-more">discover more<span class="fas fa-angle-right pa-item"></span></div>
						<div>Meridian products deliver the very best in sound and just like Land Rover, it is an intuitive and personal experience. Based in the UK, Meridian engineers and designers have employed years of psychoacoustic research to enable you to experience your music in its truest form.</div>
					</div>
					<div class="ctn-tng">
						<div>
							<img src="picture/Promotions & Events1.jpg" alt="">
						</div>
						<div class="title-small-strong"><strong>REAR SEAT ENTERTAINMENT</strong></div>
						<div class="btn-more">discover more<span class="fas fa-angle-right pa-item"></span></div>
						<div>The optional Rear Seat Entertainment system provides either an 8" screen built into each headrest or 10" high-definition seat mounted articulating screens.</div>
					</div>
				</section>
			</div>
		</div>
		<!--Footer-->
		<?php include 'footer.php'; ?>
	</body>
</html>
