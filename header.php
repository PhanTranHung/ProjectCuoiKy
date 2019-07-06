<script src="script/header.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">
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
			<a href="HomePage.php">
				<img class="logo" alt="Logo.png" src="picture/Logo.png">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" on>
			<span style="color: white;"><i class="fas fa-bars"></i></span>
		</button>
		<div class="nav-align collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav borders">
				<li class="nav-item borders" onMouseOver="navDropdownOff()">
					<a class="nav-link nav-item-hover" href="HomePage.php">Home</a>
				</li>
				<li class="nav-item borders" onMouseOver="navProduct()">
					<a class="nav-link nav-item-hover" href="products.php">Products</a>
				</li>
				<li class="nav-item borders" onMouseOver="navDropdownOff()">
					<a class="nav-link nav-item-hover" href="DirectionAwareHoverEffect/index.php">News</a>
				</li>
				<li class="nav-item borders" onMouseOver="navDropdownOff()">
					<a class="nav-link nav-item-hover" href="../ProjectCuoiKy/ContactFrom/index.html">Contact</a>
				</li>
				<li class="nav-item borders" onMouseOver="navDropdownOff()">
					<a class="nav-link nav-item-hover" href="About Us.php">About</a>
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