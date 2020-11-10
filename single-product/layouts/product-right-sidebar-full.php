<div class="row content-row row-divided row-large row-reverse">
	<div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar <?php flatsome_sidebar_classes(); ?>">
<!-- Service by webwp.vn -->

			<?php 

if( have_rows('dich_vu','option') ): ?>
	<?php while( have_rows('dich_vu','option') ): the_row(); 
					$dv_title = get_sub_field('tieu_de_dv','option');	
					$dv_vanchuyen = get_sub_field('van_chuyen','option');	
					$dv_vanchuyen_sm = get_sub_field('van_chuyen_small','option');	
					$dv_thanh_toan = get_sub_field('thanh_toan','option');	
					$dv_thanh_toan_sm = get_sub_field('thanh_toan_small','option');	
					$dv_uudai = get_sub_field('uu_dai','option');	
					$dv_uudai_sm = get_sub_field('uu_dai_small','option');	
					$dv_cham_soc = get_sub_field('cham_soc','option');	
					$dv_cham_soc_sm = get_sub_field('cham_soc_small','option');
					$dv_hotline_sp = get_sub_field('hotline_sp','option');	
					$dv_inbox_fb = get_sub_field('inbox_fb','option');	
					$dv_zalo = get_sub_field('zalo','option');	
					$dv_coupon_code = get_sub_field('coupon_code','option');
	?>
							
						<div class="uu_dai">		
							
								<div id="id_dv">
								<?php 	if($dv_title): ?>	
								<h3><?php echo $dv_title; ?> </h3> 
									<span class="t"></span> <?php endif; ?>
									<?php 	if($dv_vanchuyen): ?>	
									<span class="dv2 a"><b><?php echo $dv_vanchuyen; ?></b></br> <?php echo $dv_vanchuyen_sm; ?></span> <?php endif;
									if($dv_thanh_toan): ?>
									<span class="dv2 b"><b><?php echo $dv_thanh_toan; ?></b></br><?php echo $dv_thanh_toan_sm; ?></span><?php endif;
									if($dv_uudai): ?>
									<span class="dv2 d"><b><?php echo $dv_uudai; ?></b></br><?php echo $dv_uudai_sm; ?></span><?php endif;
									if($dv_cham_soc): ?>
									<span class="dv2 e"><b><?php echo $dv_cham_soc; ?></b></br><?php echo $dv_cham_soc_sm; ?></span><?php endif;
									if($dv_hotline_sp): ?>
									<span class="hotlinesp"><a href="tel:<?php echo $dv_hotline_sp; ?>">Hotline: <b><?php echo $dv_hotline_sp; ?></b></a></span><?php endif;
									if($dv_inbox_fb): ?>
									<a class="n" href="https://www.messenger.com/t/<?php echo $dv_inbox_fb; ?>" target="_blank" rel="nofollow">Inbox Facebook</a><?php endif;
									if($dv_zalo): ?>
									<a class="i" href="https://zalo.me/<?php echo $dv_zalo;?>" target="_blank" rel="nofollow">Chat Zalo</a><?php endif;
									if($dv_coupon_code): ?>
									<span class="m"><a href="<?php echo $dv_coupon_code; ?>" target="_blank" rel="nofollow"> Nhận phiếu giảm giá</a></span><?php endif; ?>
								</div>
						</div>
					
		<?php endwhile; ?>
<?php endif; ?>
					
			<?php
			if( have_rows('he_thong_showroom','option') ): ?>
				<div class="lien_he_sp">
			 		<div class="hidden-xs lien_he_sp">
						<div class="show_room"><span>Hệ thống showroom</span> </div>
						<ul>
						<?php	while ( have_rows('he_thong_showroom','option') ) : the_row(); ?>
							<li> <span><i class="fa fa-map-marker"></i> <?php echo the_sub_field('dia_chi_showroom','option'); ?> </br> <i class="fa fa-phone"></i> <?php echo the_sub_field('hotline_showroom','option'); ?></span> </li>
						<?php	endwhile; ?>
						</ul>
					</div>
				</div>
			<?php	else :
					endif;	?>
		<div style="padding-top: 15px;"></div>		
			<!-- End Service by webwp.vn -->
	<?php
			do_action('flatsome_before_product_sidebar');
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			if (is_active_sidebar( 'product-sidebar' ) ) {
				dynamic_sidebar('product-sidebar');
			} else if(is_active_sidebar( 'shop-sidebar' )) {
				dynamic_sidebar('shop-sidebar');
			}
		?>
	</div>

	<div class="col large-9">
		<div class="product-main">
		<div class="row">
			<div class="large-<?php echo flatsome_option('product_image_width'); ?> col">
				<?php
				/**
				 * woocommerce_before_single_product_summary hook
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
			<!-- Help Call by webwp.vn -->
							<div class="goi_lai">
								<h3><?php the_field('title_callback','option'); ?></h3>		 		
								<div class="cls">
									<?php 
									$ctf7 = get_field('links_ctf7','option');
									echo do_shortcode( '[contact-form-7 id="print_r($ctf7,true)" title="Gọi lại cho tôi"]' ); 
									
									?>
								</div>
							</div>
				<!-- End help Call by webwp.vn -->
			</div>


			<div class="product-info summary entry-summary col col-fit <?php flatsome_product_summary_classes();?>">
				<?php
					/**
					 * woocommerce_single_product_summary hook
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>

			</div>
		</div>
		</div>
		<div class="product-footer">
			<?php
					/**
					 * woocommerce_after_single_product_summary hook
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
					 */
					do_action( 'woocommerce_after_single_product_summary' );
				?>


<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;
$review_ratings_enabled = fl_woocommerce_version_check( '3.6.0' ) ? wc_review_ratings_enabled() : 'yes' === get_option( 'woocommerce_enable_review_rating' );
if ( ! $review_ratings_enabled ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>

	<div class="woocommerce-product-rating">
		<?php echo flatsome_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
		<?php if ( get_theme_mod( 'product_info_review_count' ) && get_theme_mod( 'product_info_review_count_style' ) != 'tooltip' ) : ?>
			<?php if ( comments_open() ) : ?>
			<?php //phpcs:disable ?>
				<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</a>
			<?php // phpcs:enable ?>
			<?php endif ?>
		<?php endif; ?>
	</div>

<?php endif; ?>







				
		</div>
  </div>
</div>


