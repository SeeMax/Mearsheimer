<footer class="footer" role="contentinfo">
	<div class="content">
		<div class="footer-tile logo-tile c-width-25">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" >
			<div class="copyright">
				&copy; Copyright 2018
			</div>
		</div>
		<div class="footer-tile info-tile c-width-25">
			<ul>
				<li class="footer-tile-header">
					Address
				</li>
				<li>
					<?php the_field('address', 'options'); ?>
				</li>
			</ul>
		</div>
		<div class="footer-tile social-tile c-width-25">
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
		<div class="footer-tile mailchimp-tile c-width-25">

			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://mearsheimer.us3.list-manage.com/subscribe/post?u=ac11242fa5499df63804e5396&amp;id=26f9db18f4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				<div class="footer-tile-header">Subscribe</div>
				Stay up to date with the latest work, news, and appearances.
			<div class="mc-field-group">
				<input type="email" value="" placeholder="your email" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ac11242fa5499df63804e5396_26f9db18f4" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div><!-- WRAPPER -->
</body>
</html>
