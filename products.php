<!doctype html>
<html>
	<head>
		<title>BanXeXin-Products</title>

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
				.carousel-ctn {
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
				.media_grid,{
					width: 100%;
					padding-top: 2em;
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
		<div onMouseOver="navDropdownOff()">
			<div id="slides" class="carousel slide" data-ride="carousel" onMouseOver="navDropdownOn()">
				<!--Indicators-->
				<ul class="carousel-indicators">
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
					<li data-target="#slides" data-slide-to="2"></li>
					<li data-target="#slides" data-slide-to="3"></li>
				</ul>
				<!-- The slideshow-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="position-relative">
							<img src="picture/dick lovett land rover.png" alt="Dick Lovett LandRover"/>
							<div class="carousel-ctn carousel-ctn-pst1">
								<div style="padding-left: 5%;">DICK LOVETT<br/>&emsp;LAND ROVER</div>
								<div style="padding-left: 10%;">MELKSHAM, NEAR BATH</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="position-relative">
							<img src="picture/wellcom to vn.jpg" alt="Welcom to Viet Nam"/>
							<div class="carousel-ctn carousel-ctn-pst2">
								<div style="padding-left: 5%;">Welcome to Vietnam</div>
								<div style="padding-left: 10%;">See our locations and opening hours or contact one of our team.</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="position-relative">
							<img src="picture/lastext offesrs.png" alt="Lastext Offesrs"/>	
							<div class="carousel-ctn carousel-ctn-pst3">
								<div style="padding-left: 5%;">Latest Offers</div>
								<div style="padding-left: 10%;">Multiple priority for all version 2018.</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="position-relative">
							<img src="picture/range rover sv coupe.jpg" alt="Range Rover SV Coupe"/>
							<div class="carousel-ctn carousel-ctn-pst4">
								<div style="padding-left: 5%;">RANGE ROVER SV COUPÉ</div>
								<div style="padding-left: 10%;">WELCOME TO RARITY. WELCOME TO RANGE ROVER SV COUPÉ.</div>
							</div>
						</div>
					</div>
				</div>
				<!--Left and Right controls -->
				<a class="carousel-control-prev" href="#slides" data-slide="prev">
				</a>
				<a class="carousel-control-next" href="#slides" data-slide="next">
				</a>
			</div>
		</div>
		<div class="body-content" onMouseOver="navDropdownOff()">
			<div class="titte-strong">
				<strong>OUR VEHICLES</strong>
			</div>
			<section class="clear-both">
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productRANGE ROVER.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>RANGE ROVER</strong></div>
					<div class="ctn-small">The ultimate Range Rover.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
					</div>
				</div>
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productRANGE ROVER SPORT.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>RANGE ROVER SPORT</strong></div>
					<div class="ctn-small">The most dynamic Range Rover.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
<!--
						<a href="">
							<span class="btn-more">
								drive trial
								<span class="fas fa-angle-right pa-item-order"></span>
							</span>
						</a>
-->
					</div>
				</div>
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productRANGE ROVER VELAR.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>RANGE ROVER VELAR</strong></div>
					<div class="ctn-small">The avant-garde Range Rover.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
					</div>
				</div>
			</section>
			<section class="clear-both">
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productRANGE ROVER EVOQUE.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>RANGE ROVER EVOQUE</strong></div>
					<div class="ctn-small">Distinctive and individual, a true Range Rover in compact form.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
					</div>
				</div>
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productDISCOVERY.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>DISCOVERY</strong></div>
					<div class="ctn-small">The most versatile SUV.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
					</div>
				</div>
				<div class="content-child">
					<div class="width">
						<img class="width" src="picture/productDISCOVERY SPORT.jpg" alt="">
					</div>
					<div class="title-small-strong"><strong>DISCOVERY SPORT</strong></div>
					<div class="ctn-small">The adventurous and versatile compact SUV.</div>
					<div>
						<a href="range rover.php">
							<span class="btn-more">
								discover more
								<span class="fas fa-angle-right pa-item-more"></span>
							</span>
						</a>
					</div>
					<div>
						<a href="bootstrap-4.0.0/docs/4.0/examples/checkout/order.php">
							<span class="btn-more">
								buy
								<span class="fas fa-angle-right pa-item-order" ></span>
							</span>
						</a>
					</div>
				</div>
			</section>
		</div>
		<!--Footer-->
		<?php include 'footer.php'; ?>
	</body>
</html>
