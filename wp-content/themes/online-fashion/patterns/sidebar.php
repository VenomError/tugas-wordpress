<?php
/**
 * Title: Sidebar
 * Slug: online-fashion/sidebar
 * Categories: online-fashion
 *
 * @package Online Fashion
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"className":"site-sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-sidebar" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Here....","buttonText":"Search","fontFamily":"noto-sans-lao"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"noto-sans-lao"} -->
<h4 class="wp-block-heading has-noto-sans-lao-font-family" style="padding-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:600"><?php echo esc_html__( 'Recent post', 'online-fashion' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":15,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"80px","height":"60px","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":6,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"medium","fontFamily":"noto-sans-lao"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"tiny","fontFamily":"noto-sans-lao"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"noto-sans-lao"} -->
<h4 class="wp-block-heading has-noto-sans-lao-font-family" style="padding-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:600">Tags</h4>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"post_tag","separator":"","fontFamily":"noto-sans-lao"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"noto-sans-lao"} -->
<h4 class="wp-block-heading has-noto-sans-lao-font-family" style="padding-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:600"><?php echo esc_html__( 'Categories', 'online-fashion' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:categories {"fontFamily":"noto-sans-lao"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->