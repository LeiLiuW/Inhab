<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <section class="home-hero"></section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- Shop Stuff -->

			<?php
			$args = array( 'taxonomy'=>'product_type','hide_empty' => 0 );
			$terms = get_terms( 'product_type', $args );
			?>
			<h1 class="shop-stuff-header">shop stuff</h1>
      <section class="shop-stuff">
			<?php foreach ( $terms as $term ): ?>
				<div class="shop-category">
					<p ><img class="shop-category-image" src="<?php echo(get_template_directory_uri());?>/images/<?php echo $term->slug ?>.svg" alt="."/></p>
				  <div class="shop-category-description"><?php echo $term->description; ?></div>
				  <p class="shop-category-link"><a href=" <?php echo get_term_link($term) ?>"> <?php echo $term->name; ?> Stuff</a></p>
				</div>
			 <?php endforeach; ?>
		 </section>

<!-- Inhabitent Journal -->

			<?php
        $args = array( 'post_type' => 'post', 'post_per_page' => 3 );
        $blog_posts = get_posts( $args );
      ?>
			<h1 class="inhabitent-journal-header">inhabitent journal</h1>
			<section class="inhabitent-journal">
      <?php foreach ( $blog_posts as $post ) : setup_postdata( $post );?>
        <div class="inhabitent-journal-container">
			    <div class="inhabitent-journal-image"><?php the_post_thumbnail() ?></div>
          <div class="inhabitent-journal-date"><?php the_date() ?></div>
			    <div class="inhabitent-journal-title"><?php the_title() ?></div>
			    <div class="inhabitent-journal-link"><a href="<?php the_permalink()?>">Read Entry</a></div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
		  </section>

<!-- Latest Adventures -->
     <h1 class="latest-adventure-header">latest adventure</h1>






		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
