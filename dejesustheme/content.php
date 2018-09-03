
<div class="col-md-6 my-3">
	<div class="blog-post d-inline-flex flex-wrap justify-content-between">
		<div class="col-md-5 text-center">
			<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail(array(300,250));
		} ?>
		</div>

		<div class="col-md-7">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="card-link">Read more</a>
	</div>
	</div>

</div>
