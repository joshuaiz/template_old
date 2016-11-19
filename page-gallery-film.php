<?php
/*
 Template Name: Full Width Gallery Film Page
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
							        <ul class="videos">
							            <?php foreach( $images as $image ): ?>
							                <li class="video">

							                <?php if( $image['description'] ): ?>

							                	<?php $url = $image['description']; ?>

											<div class="embed">

											<?php echo do_shortcode('[evp_embed_video url="' . $url . '"]'); ?>

											
												
											</div>
	
											<?php endif; ?>
							                    
							                </li>
							            <?php endforeach; ?>
							        </ul>
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





// jQuery(document).ready(function($){
// 	$('.gallery').owlCarousel({
//     center: true,
//     loop:true,
//     margin:0,
//     nav:true,
//     // stagePadding: 50,
//     // autoWidth:true,
//     // responsive:{
//     //     0:{
//     //         items:1,
//     //         nav:true
//     //     },
//     //     600:{
//     //         items:1,
//     //         nav:false
//     //     },
//     //     1000:{
//     //         items:1,
//     //         nav:true,
//     //         loop:false
//     //     }
//     // },
// 	navText: [
//    		"<i class='fa fa-chevron-left'></i>",
//    		"<i class='fa fa-chevron-right'></i>"
// 	]
// 	});

// 	$(".gallery").owlCarousel({
//         afterUpdate: function () {
//             updateSize();
//         },
//         afterInit:function(){
//             updateSize();
//         }
//     });
//     function updateSize(){
//         var minHeight=parseInt($('.owl-item').eq(0).css('height'));
//         $('.owl-item').each(function () {
//             var thisHeight = parseInt($(this).css('height'));
//             minHeight=(minHeight<=thisHeight?minHeight:thisHeight);
//         });
//         $('.owl-wrapper-outer').css('height',minHeight+'px');
//     }

// 	//When the Image is hovered upon, show the hidden div using Mouseover
//  	$('.owl-carousel').hover(function() {
//    		$('.owl-controls').show();
// 	},function() {
//   		$('.owl-controls').hide();
// 	});
// });

</script>
