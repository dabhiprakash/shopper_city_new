<?php 
	require_once "db/connection.php";
  	$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="row d-flex flex-column align-items-end w-100" style="position: absolute; z-index: 10;">

	<?php
		if(isset($_SESSION)){
			if(!empty($_SESSION['user_id']) && $activePage != "account"){
				if(empty($_SESSION['address']) || empty($_SESSION['city']) || empty($_SESSION['state']) || empty($_SESSION['country']) ){
					$_SESSION['error_msg'] = "Please Update all Acount Details.";
					header("Location: account.php");
				}
			}
			if((empty($_SESSION['user_id']) && $activePage == "account") || empty($_SESSION['user_id']) && $activePage == "wishlist"){
				header("Location: login.php");
			}
			if(!empty($_SESSION['success_msg'])){
	?>
		<div class="col-md-6 mb-4">
			<div class="alert alert-success alert-dark alert-round alert-inline">
				<h4 class="alert-title"><?php print_r($_SESSION['success_msg']); ?></h4>
				<button type="button" class="btn btn-link btn-close">
				<i class="d-icon-times"></i>
				</button>
			</div>
		</div>
		<?php
			unset($_SESSION['success_msg']); // Unset the session message immediately
		?>
			<script>
				// JavaScript to hide the alert after 5 seconds
				setTimeout(function () {
					document.getElementById('error-alert').style.display = 'none';
				}, 5000); // 5000 milliseconds = 5 seconds
			</script>
			<?php
			}
		if (!empty($_SESSION['error_msg'])) {
			?>
			<div class="col-md-6 mb-4">
				<div class="alert alert-danger alert-dark alert-round alert-inline"  id="error-alert">
					<h4 class="alert-title"><?php print_r($_SESSION['error_msg']); ?></h4>
					<button type="button" class="btn btn-link btn-close">
					<i class="d-icon-times"></i>
					</button>
				</div>
			</div>
			<?php
			unset($_SESSION['error_msg']); // Unset the session message immediately
			?>
			<script>
				// JavaScript to hide the alert after 5 seconds
				setTimeout(function () {
					document.getElementById('error-alert').style.display = 'none';
				}, 5000); // 5000 milliseconds = 5 seconds
			</script>
			<?php
		}
	}
	?>
</div>

	<header class="header header-border">
			<div class="header-top">
				<div class="container">
					<div class="header-left">
						<p class="welcome-msg">Welcome to Shopper City </p>
					</div>
					<div class="header-right">
						<span class="divider"></span>
						<a href="contact-us.php" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
						<a href="javascript:void(0)" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
						<?php 
						if(isset($_SESSION)){
							if( empty($_SESSION['user_id']) && empty($_SESSION['email'])){
						?>
						<a class="help" href="login.php"><i class="d-icon-user"></i>Sign in</a>
						<?php }else{ ?>
							<a class="help ml-4" href="db/logout.php">logout</a>
						<?php }} ?>
					</div>
				</div>
			</div>

			<div class="header-middle sticky-header fix-top sticky-content">
				<div class="container">
					<div class="header-left">
						<a href="#" class="mobile-menu-toggle">
							<i class="d-icon-bars2"></i>
						</a>
						<a href="demo1.html" class="logo">
							<img src="images/logo.png" alt="logo" width="153" height="44" />
						</a>

						<div class="header-search hs-simple">
							<form action="#" class="input-wrapper">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search..." required />
								<button class="btn btn-search" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>

					</div>
					<div class="header-right">
						<a href="tel:#" class="icon-box icon-box-side">
							<div class="icon-box-icon mr-0 mr-lg-2">
								<i class="d-icon-phone"></i>
							</div>
							<div class="icon-box-content d-lg-show">
								<h4 class="icon-box-title">Call Us Now:</h4>
								<p>0(800) 123-456</p>
							</div>
						</a>
						<div class="header-search hs-toggle mobile-search">
							<a href="#" class="search-toggle">
								<i class="d-icon-search"></i>
							</a>
							<form action="#" class="input-wrapper">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search your keyword..." required />
								<button class="btn btn-search" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="header-bottom d-lg-show">
				<div class="container">
					<div class="header-left">
						<nav class="main-nav">
							<ul class="menu">
								<li class="<?php if($activePage == 'index'){ echo "active";} ?>">
									<a href="index.php">Home</a>
								</li>
								<li class="<?php if($activePage == 'category'){ echo "active";} ?>">
									<a href="category.php">Categories</a>
								</li>
								<li class="<?php if($activePage == 'shop'){ echo "active";} ?>">
									<a href="shop.php">Products</a>
								</li>
								<li class="<?php if($activePage == 'blog'){ echo "active";} ?>">
									<a href="blog.php">Blog</a>
								</li>
								<li class="<?php if($activePage == 'wishlist'){ echo "active";} ?>">
									<a href="wishlist.php">Wishlist</a>
								</li>
								<li class="<?php if($activePage == 'about-us'){ echo "active";} ?>">
									<a href="about-us.php">About Us</a>
								</li>
								<?php  
									if(isset($_SESSION)){
										if(!empty($_SESSION['user_id'])){
								?>
											<li class="<?php if($activePage == 'account'){ echo "active";} ?>">
												<a href="account.php">Account</a>
											</li>
								<?php
										}
									}
								?>
								<li class="<?php if($activePage == 'contact-us'){ echo "active";} ?>">
									<a href="contact-us.php">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="header-right">
						<a href="#"><i class="d-icon-card"></i>Special Offers</a>
					</div>
				</div>
			</div>
		</header>