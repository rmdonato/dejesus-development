<?php get_header(); ?>

<div class="container-fluid">
	<div class="row justify-content-center py-5 my-5">
		

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
        
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
        
        endwhile; endif; 
			?>

	</div> <!-- /.row -->
	</div>
<?php get_footer(); ?>