			<?php echo "</a>"; //this is necessary on the remote site ?>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div style="min-width: 40%; text-align: left">
					<img style="max-width: 40%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png">
					<!-- left footer widget -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget_left") ) : ?>
					<?php endif;?>
					<!-- /left footer widget -->
				</div>
				<div style="min-width: 40%; text-align: right">
					<!-- right footer widget -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget_right") ) : ?>
					<?php endif;?>
					<!-- /right footer widget -->
					<!-- copyright -->
					<p class="copyright">
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
						<?php _e('Powered by', 'html5blank'); ?>
						<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.Theme developed by <a href="//avinerenberg.com">Avi Nerenberg</a>.
					</p>
					<!-- /copyright -->
				</div>


			</footer>
			<!-- /footer -->

			

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
				(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
				l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>
	</body>
</html>
