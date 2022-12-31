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
<div class="price-style" style="margin-inline: -6rem;
    padding-left: 6rem;
    ">
<?php echo get_field("price");?>

</div>	

	<div class="fact-style" style="background-color:#696767 ;  
	     width: 14rem;
    margin-top: 1rem;
	margin-inline: -1rem;
">
	<?php echo get_field("facts"); ?>

	</div>
	<div class="payment-style" style="background-color: #a4dee5;
    position: absolute;
	width: 15rem;
    margin-left: 14rem;
    margin-top: -11.5rem;
">
	<?php echo get_field("payment_plan_");?>

	</div>


</aside><!-- #secondary -->
