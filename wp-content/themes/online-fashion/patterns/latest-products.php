<?php
/**
 * Title: Latest Product
 * Slug: online-fashion/latest-product
 * Categories: online-fashion
 *
 * @package Online Fashion
 * @since 1.0.0
 */

?>

<!-- wp:group {"metadata":{"name":"Latest Products"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","className":"animated slideInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated slideInUp has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"noto-sans-lao"} -->
<h2 class="wp-block-heading has-text-align-center has-noto-sans-lao-font-family" style="font-size:32px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Products', 'online-fashion' ); ?></h2>
<!-- /wp:heading -->
<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>
<!-- wp:wc-booster/carousel-product {"block_id":"wc-booster-carousel-product-block-bf5f52f3-0d5a-427f-b37e-d7d83f0fc8cc","postsToShow":10,"order":"asc","titleTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"600","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"metaTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":11,"tablet":12,"mobile":12},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"buttonTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":"300","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"buttonMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[20,0,20,0],"tablet":[23,0,15,0],"mobile":[23,0,15,0]}},"buttonTextColor":"#9f1616","buttonBackground":"transparent","padding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,0,0],"tablet":[20,20,20,20],"mobile":[20,20,20,20]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[12,15,0,15],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"productPadding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,0,0],"tablet":[0,0,15,0],"mobile":[0,0,15,0]}},"enableRating":true,"enableCategory":true,"enableButton":true,"imageSize":"woocommerce_thumbnail","bgColor":"#f9f9f9","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":5,"tablet":2,"mobile":1},"units":[""]},"wrapperTarget":false,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"enableDots":true} /-->
<?php } ?>
</div>
<!-- /wp:group -->
