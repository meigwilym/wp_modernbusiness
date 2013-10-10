<?php get_header(); ?>

    <div class="container">
	
	<?php if ( have_posts() ) : ?>

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header"><?php the_title();?> <small>A Sample Blog Post</small></h1>
		  
          <?php mb_breadcrumb(); ?>
		  
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8">
        
          <!-- the actual blog post: title/author/date/content -->
          <hr>
		  
				<p><i class="icon-time"></i> Posted on August 24, 2013 at 9:00 PM by <a href="#">Start Boostrap</a></p>
				<hr>
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<hr>
				<?php endif; ?>
				<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php else : ?>
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div><!-- .entry-content -->
				<?php endif; ?>
						<?php endwhile; ?>

		<?php else : ?>
		<?php endif; ?>

          <hr>

          <!-- the comment box -->
          <div class="well"><!--
            <h4>Leave a Comment:</h4>-->
            <?php comment_form(); ?>
          </div>
          
          <hr>

          <!-- the comments -->
			<?php wp_list_comments(); ?>
        </div>
        
        <?php get_sidebar(); ?>
		
      </div>

    </div><!-- /.container -->

   <?php get_footer(); ?>