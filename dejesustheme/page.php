<?php get_header(); ?>

	<div class="row">
		<div class="col-md-10 mx-auto d-flex flex-wrap">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
		
	</div> <!-- /.row -->

<?php get_footer(); ?>