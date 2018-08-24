<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid bg-jumbo-blog">
	<div class="container text-center">
		<h1>Commentary</h1>
	</div>
</div>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12 d-inline-flex flex-wrap justify-content-between blog-main my-5">

			<?php query_posts('showposts=6'); if (have_posts()) : while (have_posts()) : the_post();

				get_template_part( 'content', get_post_format() );
  
			endwhile;
			?>
		<div class="row mx-auto">
			<nav>
				<ul class="pager">
					<li><?php next_posts_link( 'Previous' ); ?></li>
					<li><?php previous_posts_link( 'Next' ); ?></li>
				</ul>
			</nav>
		</div>	
			<?php endif; 
			?>

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->
</div>

<?php get_footer(); ?>
