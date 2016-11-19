<?php
/*
 Template Name: Full Width Gallery Page
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">

		<div id="content">

			<section class="gallery-outer">

    			<section class="gallery-inner">

    				<?php 

					$images = get_field('gallery');
							
						if( $images ): ?>
						    <div id="carousel" class="flexslider">
						        <div class="gallery">
						            <?php foreach( $images as $image ): ?>
						                <div class="carousel-cell">
							               <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							                </div>
							            <?php endforeach; ?>
							        </div>
							    </div>
							<?php endif; ?>
    					
    			</section>

			</section>

			<section class="social-outer">

    			<section class="social-inner wrap">

    				<?php if( have_rows('social_links', 'option') ): ?>

					    <ul class="social-links">
					
					    <?php while( have_rows('social_links', 'option') ): the_row(); ?>
					
					        <li><a href="<?php the_sub_field('link') ?>" target="_blank"><i class="fa fa-2x <?php the_sub_field('icon');?>"></i></a></li>
					
					    <?php endwhile; ?>
					
					    </ul>
					
					<?php endif; ?>
    			
    			</section>

			</section>

				
		</div>


<?php get_footer(); ?>

<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

<script>

jQuery(document).ready(function($){
	$('.gallery').flickity({
		wrapAround: true,
		freeScroll: true,
		// contain: true,
		pageDots: false,
		percentPosition: false,
		cellSelector: '.carousel-cell',
		imagesLoaded: true,
	});
});

</script>
