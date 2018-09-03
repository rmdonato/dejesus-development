

<div class="col-md-3 pt-5 blog-sidebar">
<!--<div class="sidebar-module sidebar-module-inset">
		<?php /**
        global $current_user;
        get_currentuserinfo();
		echo get_avatar( $current_user->ID, 64 );
		**/ ?>
		<p class="text-center"><?php /**the_author_meta( 'description' );**/	 ?> </p>
	</div>-->
<!--<div class="sidebar-module">
		<h4>Archives</h4>
        <ol class="list-unstyled">
	        <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
	</div>
	<div class="sidebar-module">
		<h4>Social Links</h4>
		<ol class="list-unstyled">
		<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
		<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
		<li><a href="#">Facebook</a></li>
		</ol>
	</div>
-->

<div id="primary" class="sidebar">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
        <aside id="archives" class"widget">
            <h4 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h4>
            <ul class="list-unstyled">
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        
   <?php endif; ?>
</div>


</div><!-- /.blog-sidebar -->