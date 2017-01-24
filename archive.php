</div></div></div>
<div class="container-fluid">
	<div class="row blog-header ">
		<div class="col-lg-12">
			<?php get_template_part('templates/page', 'header'); ?>
		</div>
	</div>
</div>

<div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
			<div class="blog-cat">
				<div class="container">
					<div class="row ">
						<div class="col-lg-9">
							<div class="article-block">
								<?php while (have_posts()) : the_post(); ?>
								
								<div class="post-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
								
								<div class="blog-content">
									<div class="entry-header">
										<h4 class="entry-title"><?php the_title(); ?></h4>
									</div>
									<div class="entry-excerpt">
										<?php the_excerpt(); ?>
									</div>
									<div class="btn btn-primary"><a href="<?php the_permalink() ?>" title="Read More" style="background-color:#0b77d5;color:#ffffff;">Read More</a>	
									</div>
								</div>
								
	<!-- 							  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?> -->
								<?php endwhile; ?>
							</div>	
							
						</div>
						<div class="col-lg-3">
							<?php dynamic_sidebar('sidebar-blog'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php the_posts_navigation(); ?>
						</div>
					</div>
				</div>
			</div>
        </main>	
      </div>
</div>      

