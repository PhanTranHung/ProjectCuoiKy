<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<title>BanXeXin-News</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Direction-Aware Hover Effect with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href="http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic" rel="stylesheet" type= "text/css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.97074.js"></script>
        <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
		<link rel="stylesheet" type="text/css" href="../css/homepage.css">
		<link rel="stylesheet" type="text/css" href="../css/products.css">
		<link rel="shortcut icon" type="image/png" href="picture/logo.png">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<style>
			@media (max-width: 1200px){
				.container{
					width: 90%;
				}
			}
			
			@media (max-width: 922px){
				
			}
			
			@media (max-width: 768px){
				.da-thumbs li {
					width: 49%;
				}
			}
			
			@media (max-width: 576px){
				.da-thumbs li {
					width: 100%;
				}
			}
		</style>
    </head>
    <body>
		<!--=-----------Header------------=-->
		
		<script src="../script/header.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<style>
			@media (max-width: 768px){
				.nav-content {
					display: none;
				}
			}
		</style>


		<header class="styleHeader sticky-top">
			<nav class="navbar navbar-expand-md" style="background-color:#040c15ba !important;">
				<div class="nav-logo">
					<a href="../HomePage.php">
						<img class="logo" alt="Logo.png" src="logo.png">
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" on>
					<span style="color: white;"><i class="fas fa-bars"></i></span>
				</button>
				<div class="nav-align collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav borders">
						<li class="nav-item borders" onMouseOver="navDropdownOff()">
							<a class="nav-link nav-item-hover" href="../HomePage.php">Home</a>
						</li>
						<li class="nav-item borders" onMouseOver="navProduct()">
							<a class="nav-link nav-item-hover" href="../products.php">Products</a>
						</li>
						<li class="nav-item borders" onMouseOver="navDropdownOff()">
							<a class="nav-link nav-item-hover" href="../DirectionAwareHoverEffect/index.php">News</a>
						</li>
						<li class="nav-item borders" onMouseOver="navDropdownOff()">
							<a class="nav-link nav-item-hover" href="../ContactFrom/index.html">Contact</a>
						</li>
						<li class="nav-item borders" onMouseOver="navDropdownOff()">
							<a class="nav-link nav-item-hover" href="../About Us.php">About</a>
						</li>
					</ul>
				</div>
			</nav>	
			<div class="borders nav-content" id="nav-content">
				<div class="nav-content-left borders">
					<div id="products" class="products">
						<ul>
							<li><a href="range rover.php">Range Rover</a></li>
							<li><a href="range rover.php">Range Rover Sport</a></li>
							<li><a href="range rover.php">Range Rover Velar</a></li>
							<li><a href="range rover.php">Discovery</a></li>
							<li><a href="range rover.php">New Discovery Sport</a></li>
							<li><a href="range rover.php">Range Rover Sv Coupe</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
        <div class="container" onMouseOver="navDropdownOff()">
			<h1 class="text-center pa-4">LATEST LAND ROVER NEWS</h1>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "data";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT * FROM datass";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<li><a href='#'><img src='" . $row["img"]. "'alt=/><div><span>" . $row["text"]. "</span></div></a></li>";
						}
						echo "";
					} else {
						echo "0 results";
					}

					$conn->close();
					?> 
				</ul>
			</section>
        </div>
		<!--Footer-->
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		
		<?php include '../footer.php'; ?>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
    </body>
</html>