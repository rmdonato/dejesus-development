
<div class="col-md-8 blog-post">
	 <?php if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} ?>
  <h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
   
 <?php the_content(); ?>

</div>
<?php get_sidebar(); ?>

