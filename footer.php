<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saltbox
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="container-fluid">

				<div class="container">
				
					<div class="row footer-row">

						<div class="col-3">
							<img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/saltbox-logo-footer.svg">
						</div>
						<div class="col footer-menu-col">
							<h6>Saltbox</h6>
							<ul class="navbar-nav footer-nav">
								<li>
									<a class="nav-link footer-link" href="">About us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Partners</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Brokers</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Referrals</a>
								</li>
							</ul>
						</div>

						<div class="col footer-menu-col">
							<h6>Products</h6>
							<ul class="navbar-nav footer-nav">
								<li>
									<a class="nav-link footer-link" href="">Workspaces</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Logistics Services</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Brokers</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Fulfillment</a>
								</li>
							</ul>
						</div>

						<div class="col footer-menu-col">
							<h6>Locations</h6>
							<ul class="navbar-nav footer-nav">
								<li>
									<a class="nav-link footer-link" href="">Atlanta</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Dallas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Seattle</a>
								</li>
							</ul>
						</div>

						<div class="col footer-menu-col">
							<h6>Resources</h6>
							<ul class="navbar-nav">
								<li>
									<a class="nav-link footer-link" href="">Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Member Stories</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">FAQs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link" href="">Contact Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link footer-link last-ft-nav" href="">Careers</a>
								</li>
							</ul>
						</div>

					</div>	

				</div>	

		</section>
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
