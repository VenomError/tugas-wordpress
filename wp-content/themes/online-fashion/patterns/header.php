<?php
/**
 * Title: Header
 * Slug: online-fashion/header
 * Categories: online-fashion
 *
 * @package Online Fashion
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8px","bottom":"8px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8px;padding-bottom:8px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2"} -->
<p class="has-text-align-center has-base-2-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:12px;font-style:normal;font-weight:600"><?php echo esc_html__( 'SHOP FOR MIN', 'online-fashion' ); ?>.<mark style="background-color:rgba(0, 0, 0, 0);color:#01fa0d" class="has-inline-color"> <strong>$199</strong></mark>, <?php echo esc_html__( 'GET EXTRA 10% 0FF', 'online-fashion' ); ?> | CODE: <mark style="background-color:rgba(0, 0, 0, 0);color:#8cd709" class="has-inline-color"><strong><?php echo esc_html__( 'SALE10', 'online-fashion' ); ?></strong></mark></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-background" id="sticky-header" style="padding-top:20px;padding-bottom:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"12px","fontStyle":"italic","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/mini-cart"]},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<?php if (class_exists('WooCommerce')) { ?>
	<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
<?php } ?>

<!-- wp:image {"id":2409,"width":"25px","height":"25px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/user.png" alt="User" class="wp-image-2409" style="object-fit:cover;width:25px;height:25px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":2406,"width":"25px","height":"25px","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/heart.png" alt="Heart" class="wp-image-2406" style="object-fit:cover;width:25px;height:25px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->