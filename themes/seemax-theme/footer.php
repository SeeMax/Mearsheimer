<footer class="footer" role="contentinfo">
	<div class="content">
		<div class="footer-tile logo-tile c-width-33-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" >
			<div class="copyright">
				&copy; Copyright 2018
			</div>
		</div>
		<div class="footer-tile info-tile c-width-33-3">
			<ul>
				<li class="footer-tile-header">
					Address
				</li>
				<li>
					<?php the_field('address', 'options'); ?>
				</li>
			</ul>
		</div>
		<div class="footer-tile social-tile c-width-33-3">
			<ul>
				<li class="footer-tile-header">
					Contact
				</li>
				<li>
					<a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
				</li>
				<li>
					<a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
				</li>
			</ul>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div><!-- WRAPPER -->
</body>
</html>
