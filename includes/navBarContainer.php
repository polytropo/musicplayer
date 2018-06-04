<div id="navBarContainer">
	<nav class="navbar">
		<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/logo2.png">
		</span>

		<div class="group">
			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("search.php")' class='navItemLink'>Search
				
					<img src="assets/images/icons/search.png" class="icon" alt="Search">
				</span>
			</div><!-- End navItem 1 -->
		</div><!-- End group  1 -->
		<div class="group">
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
			</div><!-- End navItem 2 -->
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
			</div><!-- End navItem 3 -->
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div><!-- End navItem 4 -->
		</div><!-- End group 2 -->
	</nav>
</div> <!-- End navBarContainer -->