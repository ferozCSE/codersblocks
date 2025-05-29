<?php
/**
 * Title: NBP Header
 * Slug: codersblocks/nbp-header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
        <!-- wp:site-logo {"width":50} /-->

        <!-- wp:paragraph -->
        <p>NBP</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"align":"wide","layout":{"type":"flex","justifyContent":"center"}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"text":"#356dd7"},"elements":{"link":{"color":{"text":"#356dd7"}}}}} -->
            <div class="wp-block-button is-style-outline"><a
                    class="wp-block-button__link has-text-color has-link-color wp-element-button"
                    style="color:#356dd7;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">Login</a>
            </div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"header-button2","style":{"color":{"gradient":"linear-gradient(135deg,rgb(20,184,166) 0%,rgb(5,150,105) 100%)"},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-button header-button2"><a
                    class="wp-block-button__link has-background wp-element-button"
                    style="background:linear-gradient(135deg,rgb(20,184,166) 0%,rgb(5,150,105) 100%);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Start
                    Free Trial</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->