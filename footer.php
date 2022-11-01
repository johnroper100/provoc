</div>
</div>
<!-- Sidebar -->
<div id="sidebar">
	<div class="inner">

		<!-- Search -->
		<section id="search" class="alt">
			<a href="<?php echo ORIGBASEPATH; ?>"><img src="<?php echo THEMEPATH; ?>/images/Provoc1.png" alt="logo" style="width: 100%;"></a>
		</section>

		<!-- Menu -->
		<nav id="menu">
			<header class="major">
				<h2>Menu</h2>
			</header>
			<ul>
				<?php
					$menuItems = getMenuItems('sidebar');
					foreach ($menuItems as $menuItem) {
				?>
				<li><a href="<?php echo BASEPATH . '/' . $menuItem['link']; ?>" <?php if ($menuItem['type'] == 1) { ?>target="_blank"<?php } ?>><?php echo $menuItem['name']; ?></a></li>
				<?php }; ?>
			</ul>
		</nav>

		<!-- Section -->
		<section>
			<header class="major">
				<h2>Get In Touch</h2>
			</header>
			<p>Please feel free to contact us for any reason.</p>
			<ul class="contact">
				<li class="icon solid fa-envelope"><a href="#">provoc@assumption.edu</a></li>
				<li class="icon solid fa-phone">(508) 767-7155</li>
				<li class="icon solid fa-home">500 Salisbury Street<br />
					Worcester, MA</li>
			</ul>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">&copy; <?php echo $siteTitle; ?>. All rights reserved.<br>Original Design: <a href="https://html5up.net">HTML5 UP</a>.<br>Site Construction and Modifications: <a href="https://jmroper.com">John Roper</a>.</p>
		</footer>

	</div>
</div>

</div>

<!-- Scripts -->
<script src="<?php echo THEMEPATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/assets/js/browser.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/assets/js/breakpoints.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/assets/js/util.js"></script>
<script src="<?php echo THEMEPATH; ?>/assets/js/main.js"></script>

</body>

</html>