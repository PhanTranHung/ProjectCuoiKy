<!doctype html>
<html>
	<head>
		<title>BanXeXin-Range Rover</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/homepage.css">
		<link rel="stylesheet" type="text/css" href="css/products.css">
		<link rel="shortcut icon" type="image/png" href="picture/logo.png">
		<script src="script/products.js"></script>
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
			
			@media (max-width: 1222px){
				.select-color{
					height: 470px;
				}
				
				.color-select-item img{
					width: 70%;
				}
				
				.color-click {
					left: 34%;
				}
			}
			
			@media (max-width: 900px){
				.select-color{
					height: 390px;
				}
				
				.color-select-item img{
					padding-top: 9%; 
				}
				
				.color-click {
					left: 30%;
				}
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
				
				.body-content .clear-both div {
					width: 100%;
				}
				
				.titte-strong strong{
					font-size: 1.5rem;
				}
				
				.title-small-strong strong {
					font-size: 1.1rem;
				}
				
				.select-color{
					background-image: none;
					height: 268px;
				}
				
				.color-select-item img{
					padding-top: 0px; 
				}
				
				.color-click {
					left: 23%;
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
				
				.select-color{
					height: 248px;
				}
				
				.color-select-item img{
					width: 80%;
					padding-top: 0px; 
				}
				
				.color-click {
					left: 18%;
				}
			}
			
			@media (max-width: 400px){
				.select-color{
					height: 170px;
				}
				
				.color-click {
					left: 12%;
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
		
		<div style="width: 100%; margin: 0%; padding: 0%;" onMouseOver="navDropdownOff()">
			<div class="body-content">
				<div class="titte-strong">
					<strong>RANGE ROVER</strong>
				</div>
				<div class="pic-tit">
				</div>
				<div class="titte-strong">
					<strong>A TRUE DESIGN ICON</strong>
					<div>Refinement is inherent in Range Rover. It is beautifully appointed and thoughtfully designed to cocoon and give a sense of calm and luxurious comfort.</div>
				</div>
				
				<section class="clear-both">
					<div class="introduction-left">
						<div class="title-small-strong"><strong>EXTERIOR DESIGN</strong></div>
						<div class="content-small">With its three classic lines of the lower accent graphic, floating roofline and continuous waistline, Range Rover is unmistakeable. The distinctive silhouette is gently tapered and curved, while the use of near-flush glazing and Gloss Black pillars accentuates the roof enhancing its streamlined and elegant form.</div>
					</div>
					<div class="introduction-right">
						<img class="picture" src="picture/landroverdealers2.jpg" alt="ahihi error cmnr">
					</div>
				</section>
				
				<section class="clear-both">
					<div class="introduction-left">
						<div class="title-small-strong"><strong>LONG WHEELBASE</strong></div>
						<div class="content-small">Range Rover Long Wheelbase is instantly recognisable, superbly engineered and beautifully appointed. This body style has unique features such as a distinctive 'L' badge mounted behind each front wheel arch and Narvik Black mirror caps as standard. And though the exterior length has been extended by 200mm, its silhouette does not appear any different.</div>
					</div>
					<div class="introduction-right">
						<img class="picture" src="picture/landroverdealers3.png" alt="ahihi error cmnr">
					</div>
				</section>
				
				<div class="titte-strong"><strong>TECHNOLOGY</strong></div>
				
				<section class="clear-both">
					<div class="ctn-tng">
						<div>
							<img src="picture/rangeroverTechnology.jpg" alt="">
						</div>
						<div class="title-small-strong"><strong>MERIDIAN™ SOUND</strong></div>
						<div>Meridian products deliver the very best in sound and just like Land Rover, it is an intuitive and personal experience. Based in the UK, Meridian engineers and designers have employed years of psychoacoustic research to enable you to experience your music in its truest form.</div>
					</div>
					<div class="ctn-tng">
						<div>
							<img src="picture/rangeroverTechnology1.jpg" alt="">
						</div>
						<div class="title-small-strong"><strong>REAR SEAT ENTERTAINMENT</strong></div>
						<div>The optional Rear Seat Entertainment system provides either an 8" screen built into each headrest or 10" high-definition seat mounted articulating screens.</div>
					</div>
				</section>
				
				<div class="titte-strong"><strong>choose your color</strong></div>
				
				<section>
					<div class="select-color">
						<div class="color-select-items">
							<div id="car-color-black" class="color-select-item">
								<img src="picture/color-rs-black.png" alt="">
							</div>
							<div id="car-color-grey" class="color-select-item">
								<img src="picture/color-rs-grey.png" alt="">
							</div>
							<div id="car-color-orange" class="color-select-item">
								<img src="picture/color-rs-orange.png" alt="">
							</div>
							<div id="car-color-red" class="color-select-item">
								<img src="picture/color-rs-red.png" alt="">
							</div>
							<div id="car-color-silver" class="color-select-item">
								<img src="picture/color-rs-silver.png" alt="">
							</div>
							<div id="car-color-white" class="color-select-item" >
								<img src="picture/color-rs-white.png" alt="">
							</div>
						</div>
						<div class="color-click">
							<div>
								<img onClick="getColorWhite()" src="picture/car-color-1.jpg" alt="">
							</div>
							<div>
								<img onClick="getColorSilver()" src="picture/car-color-2.jpg" alt="">
							</div>
							<div>
								<img onClick="getColorOrange()" src="picture/car-color-5.jpg" alt="">
							</div>
							<div>
								<img onClick="getColorRed()" src="picture/car-color-6.jpg" alt="">
							</div>
							<div>
								<img onClick="getColorGrey()" src="picture/car-color-3.jpg" alt="">
							</div>
							<div>
								<img onClick="getColorBlack()" src="picture/car-color-4.jpg" alt="">
							</div>
						</div>
					</div>
				</section>
				<section class="clear-both">
					<div class="specDetails">
						<ul>
							<li class="overview active">
								<a class="Heading fontH4 open" href="#">
									<span class="title">OVERVIEW</span>
								</a>
								<div>
									<div class="GridListWrapper light">
										<table>
											<tbody>
												<tr>
													<th>Number of seats</th>
													<td>5/5+2*</td>
												</tr>
												<tr>
													<th>Combined litres/100km (mpg)</th>
													<td>From 5.7 (Up to 49.6)<sup>‡</sup> (5 Seats)</td>
												</tr>
												<tr>
													<th>CO<sub>2</sub> Combined emissions (g/km)</th>
													<td>From 149<sup>‡</sup> (5 Seats)</td>
												</tr>
												<tr>
													<th>Fuel Tank Capacity (litres)</th>
													<td>54</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</li>
							<li class="performanceAndWeight active">
								<a href="#" class="Heading fontH4 open">
									<span class="title">PERFORMANCE AND WEIGHTS</span>
								</a>
								<div>
									<div class="GridListWrapper light performance">
										<table class="performance">
											<caption class="secondaryHeading performance">PERFORMANCE</caption>
											<tbody>
												<tr>
													<th>Max speed km/h (mph)</th>
													<td>180 (112)</td>
												</tr>
												<tr>
													<th>Acceleration secs 0-100km/h (0-60mph)</th>
													<td>10.4 (9.8)<sup>†</sup><sup>‡</sup></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light consumption">
										<table class="consumption">
											<caption class="secondaryHeading consumption">FUEL CONSUMPTION</caption>
											<tbody>
												<tr>
													<th>Combined litres/100km (mpg)</th>
													<td>From 5.7 (Up to 49.6)<sup>‡</sup> (5 Seats)</td>
												</tr>
												<tr>
													<th>Fuel Tank Capacity (litres)</th>
													<td>54</td>
												</tr>
												<tr>
													<th>CO<sub>2</sub> Combined emissions (g/km)</th>
													<td>From 149<sup>‡</sup> (5 Seats)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light engine">
										<table class="engine">
											<caption class="secondaryHeading engine">ENGINE</caption>
											<tbody>
												<tr>
													<th>Capacity (cc)</th>
													<td>1,999</td>
												</tr>
												<tr>
													<th>Power (kW/PS)</th>
													<td>110 / 150</td>
												</tr>
												<tr>
													<th>Torque (Nm)</th>
													<td>380 </td>
												</tr>
												<tr>
													<th>Transmission</th>
													<td>6-speed manual</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light weights">
										<table class="weights">
											<caption class="secondaryHeading weights">WEIGHTS (kg)</caption>
											<tbody>
												<tr>
													<th>Weight from (kg)</th>
													<td>1,732</td>
												</tr>
												<tr>
													<th>Maximum Laden weight (kg)</th>
													<td>2,380</td>
												</tr>
												<tr>
													<th>Maximum mass on each axle (front) (kg)</th>
													<td>1,250</td>
												</tr>
												<tr>
													<th>Maximum mass on each axle (rear) (kg)</th>
													<td>1,200</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</li>
							<li class="towing active">
								<a href="#" class="Heading fontH4 open">
									<span class="title">TOWING (kg) (TOWING PACK OPTION)</span>
								</a>
								<div>
									<div class="GridListWrapper light towing">
										<table class="towing">
											<caption class="secondaryHeading towing">TOWING</caption>
											<tbody>
												<tr>
													<th>Unbraked trailer (kg)</th>
													<td>750</td>
												</tr>
												<tr>
													<th>Maximum towing (kg)</th>
													<td>1,800</td>
												</tr>
												<tr>
													<th>Maximum coupling point/nose weight (kg)</th>
													<td>100</td>
												</tr>
												<tr>
													<th>Maximum vehicle and trailer combination/Gross Train Weight (kg)</th>
													<td>4,180</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light carrying">
										<table class="carrying">
											<caption class="secondaryHeading">ROOF CARRYING</caption>
											<tbody>
												<tr>
													<th>Maximum roof load (including Roof Rails) (kg)</th>
													<td>75</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</li>
							<li class="dimensions active">
								<a href="#" class="Heading fontH4 open">
									<span class="title">DIMENSIONS AND CAPABILITIES</span>
								</a>
								<div>
									<div class="GridListWrapper light dimensions">
										<h2 class="secondaryHeading dimensions">DIMENSIONS AND CAPABILITIES</h2>
										<ul class="imageList">
											<li class="lengthimage">
												<div class="lengthimage">
													<img src="picture/performance 1.jpg" alt="">LENGTH (mm)
													<span class="lengthimage">4,599</span>
												</div>
											</li>
											<li class="depthimage">
												<div class="depthimage">
													<img src="picture/performance 2.jpg" alt="">WADING DEPTH (mm)
													<span class="depthimage">600</span>
												</div>
											</li>
											<li class="clearanceimage">
												<div class="clearanceimage">
													<img src="picture/performance 3.jpg" alt="">OBSTACLE CLEARANCE (mm)
													<span class="clearanceimage">211</span>
												</div>
											</li>
											<li class="trackimage">
												<div class="trackimage">
													<img src="picture/performance 4.jpg" alt="">REAR WHEEL TRACK (mm)
													<span class="trackimage">1,630</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="GridListWrapper light turning">
										<table class="turning">
											<caption class="secondaryHeading turning">TURNING CIRCLE</caption>
											<tbody>
												<tr>
													<th>Kerb-to-Kerb (m)</th>
													<td>11.67 </td>
												</tr>
												<tr>
													<th>Wall-to-wall (m)</th>
													<td>11.86</td>
												</tr>
												<tr>
													<th>Turns lock-to-lock (no. of turns)</th>
													<td>2.36</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light clearance">

										<table class="clearance">
											<caption class="secondaryHeading clearance">OBSTACLE CLEARANCE</caption>
											<tbody>
												<tr>
													<th>Standard ride height - Front Axle (mm)</th>
													<td>211</td>
												</tr>
												<tr>
													<th>Standard ride height - Rear Axle (mm)</th>
													<td>251 (Efficient Driveline)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light wading">
										<table class="wading">
											<caption class="secondaryHeading wading">WADING DEPTH</caption>
											<tbody>
												<tr>
													<th>Maximum wading depth (mm)</th>
													<td>600</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light lengths">
										<table class="lengths">
											<caption class="secondaryHeading lengths">VEHICLE LENGTH</caption>
											<tbody>
												<tr>
													<th>Overall length (mm)</th>
													<td>4,599</td>
												</tr>
												<tr>
													<th>Wheelbase (mm)</th>
													<td>2,741</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light widths">
										<table class="widths">
											<caption class="secondaryHeading widths">VEHICLE HEIGHT &amp; WIDTHS</caption>
											<tbody>
												<tr>
													<th>Height (mm)</th>
													<td>1,724</td>
												</tr>
												<tr>
													<th>Front wheel track (mm)</th>
													<td>1,621</td>
												</tr>
												<tr>
													<th>Rear wheel track (mm)</th>
													<td>1,630</td>
												</tr>
												<tr>
													<th>Width Mirrors Folded (mm)</th>
													<td>2,069</td
												</tr>
												<tr>
													<th>Width (mirrors out) (mm)</th>
													<td>2,173 </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light approach">
										<table class="approach">
											<caption class="secondaryHeading approach">APPROACH ANGLE – OFF-ROAD GEOMETRY</caption>
											<tbody>
												<tr>
													<th>Standard</th>
													<td>23.4° </td>
												</tr>
												<tr>
													<th>Off-Road Geometry</th>
													<td>-</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light ramp">
										<table class="ramp">
											<caption class="secondaryHeading ramp">RAMP ANGLE - OFF-ROAD GEOMETRY</caption>
											<tbody>
												<tr>
													<th>Standard</th>
													<td>20° </td>
												</tr>
												<tr>
													<th>Off-Road Geometry</th>
													<td>-</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light departure">
										<table class="departure">
											<caption class="secondaryHeading departure">DEPARTURE ANGLE - OFF-ROAD GEOMETRY</caption>
											<tbody>
												<tr>
													<th>Standard</th>
													<td>31°</td>
												</tr>
												<tr>
													<th>Off-Road Geometry</th>
													<td>-</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light loadspaceupright">
										<table class="loadspaceupright">
											<caption class="secondaryHeading loadspaceupright">LOADSPACE CAPACITY - REAR SEATS UPRIGHT</caption>
											<tbody>
												<tr>
													<th>Height (mm)</th>
													<td>778</td>
												</tr>
												<tr>
													<th>Width (mm)</th>
													<td>1,318</td>
												</tr>
												<tr>
													<th>Loadspace volume (litres)</th>
													<td>981</td>
												</tr>
												<tr>
													<th>Loadspace width between arches (mm)</th>
													<td>1,108</td>
												</tr>
												<tr>
													<th>Length at floor (mm)</th>
													<td>985 </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light loadspaceforward">
										<table class="loadspaceforward">
											<caption class="secondaryHeading loadspaceforward">LOADSPACE CAPACITY - REAR SEATS FORWARD</caption>
											<tbody>
												<tr>
													<th>Height (mm)</th>
													<td>778 </td>
												</tr>
												<tr>
													<th>Width (mm)</th>
													<td>1,318 </td>
												</tr>
												<tr>
													<th>Loadspace volume (litres)</th>
													<td>1,698 </td>
												</tr>
												<tr>
													<th>Loadspace width between arches (mm)</th>
													<td>1,108 </td>
												</tr>
												<tr>
													<th>Length at floor (mm)</th>
													<td>1,887 </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light rideheight">
										<table class="rideheight">
											<caption class="secondaryHeading rideheight">STANDARD RIDE HEIGHT</caption>
											<tbody>
												<tr>
													<th>With roof side rails (mm)</th>
													<td>1,700 </td>
												</tr>
												<tr>
													<th>With roof antennae (mm)</th>
													<td>1,724 </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="GridListWrapper light headroom">
										<table class="headroom">
											<caption class="secondaryHeading headroom">HEADROOM</caption>
											<tbody>
												<tr>
													<th>Front headroom (mm)</th>
													<td>1,021 </td>
												</tr>
												<tr>
													<th>Rear headroom (mm)</th>
													<td>984 </td>
												</tr>
												<tr>
													<th>Front headroom (with panoramic roof) (mm)</th>
													<td>1,021 </td>
												</tr>
												<tr>
													<th>Rear headroom (with panoramic roof) (mm)</th>
													<td>984</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
		<!--Footer-->
		<?php include 'footer.php'; ?>
	</body>
</html>
