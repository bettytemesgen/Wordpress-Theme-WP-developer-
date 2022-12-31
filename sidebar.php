<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
<div class="price-style">
<?php echo get_field("price");?>

</div>	

	<div class="fact-style" >
	<?php echo get_field("facts"); ?>

	</div>
	<div class="payment-style" >
	<?php echo get_field("payment_plan_");?>

	</div>


</aside><!-- #secondary -->
