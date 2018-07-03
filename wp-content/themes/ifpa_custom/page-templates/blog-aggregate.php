<?php /*Template Name: Blog Aggregate*/ ?>

<?php get_header(); ?>

<main role="main">
	
	<!-- header img -->
	<img src="<?php echo get_template_directory_uri(); ?>/img/headers/Blogs.png"/>
	<!-- /header img -->

	<section>
		<?php the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
		<!-- /article -->

	</section>

	<section id="split-page-main">
		<div id="split-page-container" class="search-page">
			<h1 class="page-header" style="padding: 0;">Recent Blog Posts</h1>
			<?php
				$catObj = get_category_by_slug('blog'); 
				$catId = $catObj->term_id;
				query_posts('cat='.$catId);
				get_template_part('loop');
				get_template_part('pagination');
			?>
		</div>
	</section>
</main>
<!--recent blog posts-->
			<section id="recent-blog-posts">
				<h1 style="padding-left: 6vw; font-weight: bold; text-transform: uppercase; color: white;">Recent Blog Posts</h1>
			</section>

			<section class="home-block">
				<?php
					$catObj = get_category_by_slug('blog'); 
					$catId = $catObj->term_id;
					$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=3');
					while($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
						<section class="home-block-article">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a class="home-block-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<a class="home-block-date" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
						</section>
				<?php
					endwhile;
					wp_reset_postdata();	
				?>
			</section>
			<!--/recent blog posts-->
<?php get_footer(); ?>