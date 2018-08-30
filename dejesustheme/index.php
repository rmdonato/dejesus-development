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
			<!-- Add the pagination functions here. -->
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		</div>	

			<?php endif; 
			?>

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->
</div>

<?php get_footer(); ?>
