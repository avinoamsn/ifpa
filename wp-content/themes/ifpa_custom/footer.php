			<?php echo "</a>"; //this is necessary on the remote site ?>

			<!--recent blog posts-->
			<section id="recent-blog-posts">
				<h1 style="padding-left: 6vw; font-weight: bold; text-transform: uppercase; color: white;">Recent Blog Posts</h1>
			</section>

			<section class="home-block">
				<?php
					$catObj = get_category_by_slug('blog'); 
					$catId = $catObj->term_id;
					$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
					while($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
						<section class="home-block-article">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
						</section>
				<?php
					endwhile;
					wp_reset_postdata();	
				?>
			</section>
			<!--/recent blog posts-->

			<div style="height: 5px; background-color: #707070"></div>

			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div style="min-width: 40%; text-align: left">
					<img style="max-width: 40%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png">
					<!-- left footer widget -->
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget_left") ) : ?>
					<?php endif;?>
					<!-- /left footer widget -->
					<!-- social links -->
					<div style="display: flex; align-items: center; padding: 15px 0 20px 15px">
						<a href="https://www.facebook.com/patientaccess/"><img style="height: 32px; padding: 5px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/facebook.svg"></a>
						<a href="https://twitter.com/patientaccess?lang=en"><img style="height: 32px; padding: 5px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/twitter.svg"></a>
						<a href="https://www.linkedin.com/company/alliance-for-patient-access/"><img style="height: 32px; padding: 5px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/linkedin.svg"></a>
						<a href="https://www.youtube.com/channel/UCnFUTFIj5E8jMNbmkZbiRMw"><img style="height: 32px; padding: 5px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/youtube.svg"></a>
					</div>
					<!-- /social links -->
				</div>
				
				<div style="align-self: stretch; display: flex; flex-direction: column; min-width: 40%; align-content: right">
					<div id="footer-right">
						<!-- right footer widget -->
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget_right") ) : ?>
						<?php endif;?>
						<!-- /right footer widget -->

						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright Institute for Patient Access<!--?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
							<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>. Theme developed by <a href="//avinerenberg.com">Avi Nerenberg</a-->.
						</p>
					<!-- /copyright -->
					</div>
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
