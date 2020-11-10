<?php
/**
 * Single product short description
 *
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

//if ( ! $short_description ) {
//	return;
//}

?>
<div class="product-short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>
<!-- KM by webwp.vn -->
<?php if( have_rows('banner_khuyen_mai','option') ): ?>
<div class="anh_km">
	<ul class="slides">
	<?php while( have_rows('banner_khuyen_mai','option') ): the_row(); 
		// vars
		$image = get_sub_field('anh_km','option');
		$link = get_sub_field('link_anh_km','option');
		?>
			<?php if($image): ?>
				<li class="slide">
					<?php if( $link ): ?>
						<a href="<?php echo $link; ?>">
					<?php endif; ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<?php if( $link ): ?>
						</a>
					<?php endif; ?>
				</li>
			<?php endif; ?>	
	<?php endwhile; ?>
	</ul>
</div>
<?php endif; ?>

<?php
// Thong tin san pham 
if( have_rows('tin_khuyen_mai_chung','option') ): ?>
<div class="tt_khuyen_mai">
<h3><strong>Khuyến mãi</strong></h3>
	<ul>
	<?php
 	// khuyen mai chung
    while ( have_rows('tin_khuyen_mai_chung','option') ) : the_row(); ?>
     <li> <span><?php echo the_sub_field('noi_dung_km','option'); ?>
	 <?php 
		$lien_ket = get_sub_field('xem_chi_tiet_km','option');
		if( $lien_ket ): ?>
		<a href="<?php echo $lien_ket; ?>"> Xem chi tiết</a>
		<?php endif; ?></span>
 	 </li> 
  <?php  endwhile; ?>
  <?php
	 // khuyen mai rieng
	 if( have_rows('thong_tin_khuyen_mai_rieng') ): 
    while ( have_rows('thong_tin_khuyen_mai_rieng') ) : the_row(); ?>
     <li> <span><?php echo the_sub_field('khuyen_mai_rieng_sp'); ?>
	 <?php 
		$lien_ket_2 = get_sub_field('xem_chi_tiet_km_rieng');
		if( $lien_ket_2 ): ?>
		<a href="<?php echo $lien_ket_2; ?>"> Xem chi tiết</a>
		<?php endif; ?></span>
	  </li> 
	  <?php endwhile; 
  		else :
		endif;?>
		
	</ul>
	</div>
<?php else : endif; 


if( have_rows('thong_tin_dat_hang','option') ): ?>
	<?php while( have_rows('thong_tin_dat_hang','option') ): the_row(); 
		$linkdtmua = get_sub_field('lien_ket_hotline','option');	
		$sodtmua = get_sub_field('goi_dat_mua','option');	
		$giolam = get_sub_field('gio_lam_viec','option');	
if( $sodtmua ): ?>
	<div id="dat_hang">
		<span>Gọi đặt mua: <a href="tel:<?php echo $linkdtmua ; ?> "> <?php echo $sodtmua; ?></a> <?php echo $giolam; ?></span>
	</div>
	<?php endif; ?>	
    <?php endwhile; ?>
<?php endif; ?>

<div class="oder_tragop">
<?php 
$tra_gop = get_field('tra_gop','option');
$link_tra_gop = get_field('link_tra_gop','option');
$tra_gop_the = get_field('tra_gop_the','option');
$link_qua_the = get_field('link_qua_the','option');
if($tra_gop): ?>
	<a id="tra_gop" class="buy_repay " href="<?php echo $link_tra_gop; ?>"><b><?php echo $tra_gop; ?></b><span><?php echo the_field('tra_gop_note','option'); ?></span></a>
	<?php endif; 
if($tra_gop_the): ?>
	<a class="tra_gop_the cw" href="<?php echo $link_qua_the; ?>"><b><?php echo $tra_gop_the; ?></b><span><?php echo the_field('tra_gop_the_note','option'); ?></span></a>
	<?php endif; ?>
</div>
