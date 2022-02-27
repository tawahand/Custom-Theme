<?php get_header() ;?>
			<!-- Main -->
				<!-- Banner -->

	<?php if ( true == get_theme_mod( 'Toogle_Home_Banner', 'on' ) ) : ?>
		<section id="banner">
<header>
<h2>Helo. Wellcome Talha Academy.</h2>
<p><?php echo  get_theme_mod( 'home_Banner_Heading_text', 'A responsive template by HTML5 UP')?></p>
</header>
</section>

<?php endif; ?>


			<!-- Intro -->
		<?php dynamic_sidebar('home-services')?>
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">
											<?php
											$portfolio_args= array(
												'post_type'      => 'portfolio',
												'posts_per_page' => 6
											);
											$portfolio_posts = new WP_Query($portfolio_args);
											while($portfolio_posts->have_posts()){
												$portfolio_posts->the_post();
											
											?>
											
											
											
											
											
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="<?php the_permalink()?>" class="image featured"><?php the_post_thumbnail('portfolio-thumb')?></a>
													<header>
														<h3><?php the_title()?></h3>
													</header>
													<?php the_excerpt()?>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink()?>" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>

											<?php } ?>
											<?php wp_reset_postdata()?>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
											<?php $blog_args = array (
												'post_type'     => 'post',
												'posts_per_page' => 2

											);

											$blog_posts = new WP_Query($blog_args);
											while($blog_posts->have_posts()){
												$blog_posts->the_post();
											
											?>
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="<?php the_permalink()?>" class="image featured"><?php the_post_thumbnail()?></a>
													<header>
														<h3><?php the_title() ?></h3>
														<p>Posted On <?php the_date()?> at <?php the_time() ?></p>
													</header>
													<?php the_excerpt() ?>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
															<li><a href="<?php comments_link()?>" class="button alt icon solid fa-comment"><?php echo get_comments_number ()?> comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<?php  } ?>
											
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>
                <?php get_footer();?>