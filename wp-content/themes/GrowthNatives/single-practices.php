<?php
get_header();
/* Start the Loop */
if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        // get_template_part( 'template-parts/content/content', get_post_type() );
    }
}
//we can add our html or any code in this
?>

    <?php while ( have_posts() ) : the_post(); ?>
<div class="body">
	<div class="container">
		<div class="clear"></div>
		<div class="main">
			<div class="post content">
				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
				<div class="content">
					<?php the_content(); ?>
                    <div class="portfolio-item">
								  
		                          
										<!-- Popup Project - Start -->
										
										<div id="popupProject"  >

       
										<div id="popupProject"  >
										    
											<div class="row">
												<div class="col-md-12">
													<div class="portfolio-title">
														<div class="row">
															<div class="portfolio-nav-all col-md-1">
																<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
															</div>
															<div class="col-md-10 center">
																<h2 class="mb-none"><?php echo get_the_title()?></h2>
															</div>
															<div class="portfolio-nav col-md-1">
																<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
																<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
															</div>
														</div>
													</div>

													<hr class="tall">
												</div>
											</div>

											<div class="row mb-xl">
												<div class="col-md-4">

													<span class="img-thumbnail">
														<img alt="" class="img-responsive" src="<?php echo get_the_post_thumbnail()?>">
													</span>

												</div>

												<div class="col-md-8">

													<div class="portfolio-info">
														<div class="row">
															<div class="col-md-12 center">
																<ul>
																	<li>
																		<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
																	</li>
																	<li>
																		<i class="fa fa-calendar"></i> 01 January 2017
																	</li>
																	<li>
																		<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>

													<h5 class="mt-sm">Project Description</h5>
													<p class="mt-xlg"><?php echo the_excerpt()?></p>

													<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

													<ul class="portfolio-details">
														<li>
															<h5 class="mt-sm mb-xs">Skills</h5>

															<ul class="list list-inline list-icons">
																<li><i class="fa fa-check-circle"></i> Design</li>
																<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
																<li><i class="fa fa-check-circle"></i> Javascript</li>
																<li><i class="fa fa-check-circle"></i> Backend</li>
															</ul>
														</li>
														<li>
															<h5 class="mt-sm mb-xs">Client</h5>
															<p>Okler Themes</p>
														</li>
													</ul>

												</div>
											</div>
										</div>
										<!-- Popup Project - End -->
									</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php endwhile; ?>
    
    <?php
get_footer();
 