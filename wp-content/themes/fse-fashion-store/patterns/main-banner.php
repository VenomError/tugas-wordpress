<?php

/**
 * Title: Header Media
 * Slug: fse-fashion-store/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":65,"dimRatio":40,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":600,"minHeightUnit":"px","customGradient":"linear-gradient(84deg,rgb(0,0,0) 0%,rgb(0,0,0) 19%,rgba(0,0,0,0.8) 48%,rgba(0,0,0,0.1) 100%)","className":"alignfull sliderimg","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover alignfull sliderimg" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(84deg,rgb(0,0,0) 0%,rgb(0,0,0) 19%,rgba(0,0,0,0.8) 48%,rgba(0,0,0,0.1) 100%)"></span><img class="wp-block-cover__image-background wp-image-65" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2","fontSize":"40px"}},"textColor":"white","className":"main-heading","fontFamily":"bebas-neue"} -->
<h2 class="wp-block-heading main-heading has-white-color has-text-color has-link-color has-bebas-neue-font-family" style="font-size:40px;font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e('Fashion that Celebrates Every Body:','fse-fashion-store'); ?><br><?php esc_html_e('Stylish, Comfortable, and Made for You.','fse-fashion-store'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"slider-btn","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons slider-btn" style="margin-top:0;margin-bottom:0"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"15px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"0px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('SHOP NOW','fse-fashion-store'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->