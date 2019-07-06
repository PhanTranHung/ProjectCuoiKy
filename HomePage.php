<!doctype html>

<html>
	<head>
		<title>Bán Xe Xịn</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/homepage.css">
		<link rel="shortcut icon" type="image/png" href="picture/logo.png">
		<style>
			body {
				font-family: Landrover,Arial,Verdana,Helvetica,sans-serif;
				font-size: 16px;
			}
			
			@media (min-width: 1050px){
				body {
					font-size: 16px;
				}
			}
			
			@media (max-width: 900px){
				.coll-3, .ulReadyToGoBar li {
					width: 50%;
				}
				
			}
			
			@media (max-width: 768px){
				.carousel-ctn{
					display: none;
				}
				
				body {
					font-size: 14px;
				}
			}
			
			@media (max-width: 600px){
				.media_grid{
					width: 100%;
					padding-bottom: 3rem;
				}
				
				.coll-3, .ulReadyToGoBar li {
					width: 100%;
				}
			}
		</style>
		
		
	</head>

	<body>
		<!--=-----------Header------------=-->
		
		<?php include 'header.php'; ?>
		
		<!--Content-->
		<div onMouseOver="navDropdownOff()">
			<div id="slides" class="carousel slide" data-ride="carousel" onMouseOver="navDropdownOn()">
				<!--Indicators-->
				<ul class="carousel-indicators">
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
					<li data-target="#slides" data-slide-to="2"></li>
				</ul>
				<!-- The slideshow-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="position-relative">
							<img src="picture/wellcom to vn.jpg" alt="Welcom to Viet Nam"/>
							<div class="carousel-ctn carousel-ctn-pst1">
								<div style="padding-left: 5%;">Welcome to Vietnam</div>
								<div style="padding-left: 10%;">See our locations and opening hours or contact one of our team.</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="position-relative">
							<img src="picture/lastext offesrs.png" alt="Lastext Offesrs"/>	
							<div class="carousel-ctn carousel-ctn-pst2">
								<div style="padding-left: 5%;">Latest Offers</div>
								<div style="padding-left: 10%;">Multiple priority for all version 2018.</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="position-relative">
							<img src="picture/range rover sv coupe.jpg" alt="Range Rover SV Coupe"/>
							<div class="carousel-ctn carousel-ctn-pst3">
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
			<!-- content-->

			<section class="jump">
				<a href="#">
					<div class="img-psn"><img class="img-size" src="picture/new land rover range.png" alt=""/></div>
					<div class="content">
						<div>new land rover range</div>
						<div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div>
					</div>
				</a>
			</section>
			<section class="jump">
				<a href="#">
					<img class="img-size" src="picture/lr_usedrange.png" alt=""/>
					<div class="content2">
						<div>Approved Used Land Rover</div>
						<div>Explore the widest selection of Approved Used Land Rovers</div>
						<div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div>
					</div>
				</a>
			</section>
			<section class="dkmSaiChoNao">
				<a class="media_grid borders" href="#">
					<div>
						<figure>
							<img class="image" src="picture/land rover dealers.jpg" alt="land rover dealers"/>
						</figure>
						<div class="pading-item">
							<div>LAND ROVER RANGE</div>
							<div>Tradition meets innovation. Craft meets cutting edge. Every vehicle bearing the Land Rover badge is a testament to our relentless pursuit of perfection.</div>
						</div>
					</div>
				</a>
				<a class="media_grid borders" href="#">
					<div>
						<figure>
							<img class="image" src="picture/book a test drive.jpg" alt="land rover dealers"/>
						</figure>
						<div class="pading-item borders">
							<div>BOOK A TEST DRIVE</div>
							<div>Experience the refined capability and commanding performance that comes standard with every Land Rover vehicle</div>
						</div>
					</div>
				</a>
				<a class="media_grid borders" href="#">
					<div>
						<figure>
							<img class="image" src="picture/welcome to land rover viet nam.png" alt="land rover dealers"/>
						</figure>
						<div class="pading-item">
							<div>WELCOME TO LAND ROVER VIETNAM</div>
							<div>Have a question about Land Rover vehicles? Get in touch with us and we'll gladly answer your queries.</div>
						</div>
					</div>
				</a>
			</section>
			<section class="FeatureHighlight borders">
				<div class="items">
					<div class="coll-3">
						<img src="picture/FeatureHighlight1.jpg" alt="">
						<div class="font-strong">COMPARE OUR VEHICLES</div>
						<div>Select up to three vehicles and compare them side by side.</div>
						<a href=""><div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div></a>
					</div>
					<div class="coll-3">
						<img src="picture/FeatureHighlight2.jpg" alt="">
						<div class="font-strong">PETROL OR DIESEL?</div>
						<div>Changes in legislation, concerns over public health and the transparency of emissions testing, has caused many to question how clean diesel engines are and whether it’s the right choice for them. Current diesel engines are some of the cleanest ever produced and we’re on a journey to make them even cleaner.</div>
						<a href=""><div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div></a>
					</div>
					<div class="coll-3">
						<img src="picture/FeatureHighlight3.jpg" alt="">
						<div class="font-strong">OWNERSHIP</div>
						<div>Find all the information you need about service and warranties as well as guides to help you make the most of your Land Rover’s outstanding technology and features.</div>
						<a href=""><div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div></a>
					</div>
					<div class="coll-3">
						<img src="picture/FeatureHighlight4.jpg" alt="">
						<div class="font-strong">RANGE ROVER SPORT DRAGON CHALLENGE</div>
						<div>99 turns and 999 steps, explore the story of how New Range Rover Sport Plug-In Hybrid took on Tianmen Mountain Road in the Dragon Challenge.</div>
						<a href=""><div class="btn-more">discover more<span class="fas fa-angle-right pa-item-more"></span></div></a>
					</div>
				</div>
			</section>
			<section class="ReadyToGoBar">
				<div>
					<ul class="ulReadyToGoBar borders">
						<li>
							<a href="">
								<div>
									<span>
										<i class="icon-compare"></i>
									</span>
								</div>
									<strong>COMPARE OUR VEHICLES</strong>
								<div>
								</div>
								<div>
									Select up to three vehicles and compare them side by side
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>
									<span>
										<i class="icon-ignite-configure"></i>
									</span>
								</div>
									<strong>BUILD YOUR OWN</strong>
								<div>
								</div>
								<div>
									Use the configurator to design your perfect vehicle
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>
									<span>
										<i class="icon-driveoffroad"></i>
									</span>
								</div>
									<strong>BOOK AN EXPERIENCE DAY</strong>
								<div>
								</div>
								<div>
									Book a Land Rover Experience to put a Land Rover through its paces
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>
									<span>
										<i class="icon-driveonroad"></i>
									</span>
								</div>
									<strong>BOOK A TEST DRIVE</strong>
								<div>
								</div>
								<div>
									Arrange an on-road test drive through your nearest retailer
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<!--Footer-->
		<?php include 'footer.php'; ?>
	</body>
</html>

