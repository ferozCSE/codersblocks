<?php
/**
 * Title: Newsletter Section
 * Slug: codersblocks/newsletter-section
 * Categories: featured, newsletter
 * Keywords: 
 * Block Types: core/template-part/featured
 * Inserter: true
 * description: A section encouraging users to subscribe to a newsletter with a heading, description, and call-to-action buttons.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"style":{"color":{"background":"#f9fafb"},"spacing":{"padding":{"top":"40px","bottom":"40px","right":"0rem","left":"0rem"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
    style="background-color:#f9fafb;padding-top:40px;padding-right:0rem;padding-bottom:40px;padding-left:0rem">
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"0rem"}}},"fontSize":"xx-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-text-color has-link-color has-xx-large-font-size"
        style="color:#1f2937;margin-top:0rem"><strong>Stay Updated with Our Newsletter</strong></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0.5rem","bottom":"4rem"}},"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}}},"fontSize":"medium","fontFamily":"sans"} -->
    <p class="has-text-align-center has-text-color has-link-color has-sans-font-family has-medium-font-size"
        style="color:#1f2937;margin-top:0.5rem;margin-bottom:4rem">Subscribe to our newsletter to get the latest news,
        updates, and offers. Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit nunc in eros
        scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non, amet, aliquet scelerisque nullam sagittis,
        pulvinar.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"textAlign":"center","className":"subscribe-button","style":{"color":{"background":"#1d4ed8"}}} -->
            <div class="wp-block-button subscribe-button"><a
                    class="wp-block-button__link has-background has-text-align-center wp-element-button"
                    style="background-color:#1d4ed8">Subscribe Now →</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"textAlign":"center","className":"is-style-outline subscribe-button2","fontSize":"medium"} -->
            <div class="wp-block-button is-style-outline subscribe-button2"><a
                    class="wp-block-button__link has-medium-font-size has-text-align-center has-custom-font-size wp-element-button">Learn
                    More</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->