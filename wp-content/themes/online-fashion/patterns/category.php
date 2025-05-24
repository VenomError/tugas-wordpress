<?php
/**
 * Title: Category
 * Slug: online-fashion/category
 * Categories: online-fashion
 *
 * @package Online Fashion
 * @since 1.0.0
 */

?>

<!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}}},"className":"animated fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"noto-sans-lao"} -->
<h2 class="wp-block-heading has-noto-sans-lao-font-family" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Choose Your Category', 'online-fashion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 'online-fashion' ); ?>.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"12px","bottom":"12px"}},"border":{"radius":"6px","width":"1px"}},"borderColor":"custom-color-1","className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-link-color has-border-color has-custom-color-1-border-color wp-element-button" style="border-width:1px;border-radius:6px;padding-top:12px;padding-right:var(--wp--preset--spacing--30);padding-bottom:12px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'View All Category', 'online-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>
	<!-- wp:wc-booster/category-collage {"block_id":"wc-booster-category-collage-block-723a8506-390d-4295-b5b9-7cf3b6305637","layout":"two"} /-->
<?php } ?>
	</div>

<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->