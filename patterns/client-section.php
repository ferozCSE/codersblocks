<?php
/**
 * Title: Client Section
 * Slug: codersblocks/client-section
 * Categories: featured, client
 * Keywords: 
 * Block Types: core/template-part/featured
 * Inserter: true
 * description: A section showcasing trusted partner company logos with a heading and description.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"style":{"color":{"background":"#f2f4f8"},"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
    style="background-color:#f2f4f8;padding-top:5rem;padding-right:1.25rem;padding-bottom:5rem;padding-left:1.25rem">
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#2563eb"},"elements":{"link":{"color":{"text":"#2563eb"}}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size"
        style="color:#2563eb;letter-spacing:0.1em;text-transform:uppercase"><strong>Our Trusted Partners</strong></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem"}}}} -->
    <h1 class="wp-block-heading has-text-align-center has-text-color has-link-color"
        style="color:#1f2937;margin-top:1rem"><strong>Companies We\'ve Worked With</strong></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"1rem","bottom":"4rem"}},"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}}},"fontSize":"medium","fontFamily":"sans"} -->
    <p class="has-text-align-center has-text-color has-link-color has-sans-font-family has-medium-font-size"
        style="color:#1f2937;margin-top:1rem;margin-bottom:4rem">We’ve partnered with some of the most innovative and
        leading companies to bring the best solutions to you.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"align":"wide","className":"logo-scroll-container","style":{"border":{"top":{"color":"#e5e7eb","width":"1px"},"right":[],"bottom":{"color":"#e5e7eb","width":"1px"},"left":[]},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide logo-scroll-container"
        style="border-top-color:#e5e7eb;border-top-width:1px;border-bottom-color:#e5e7eb;border-bottom-width:1px">
        <!-- wp:group {"align":"wide","className":"logo-scroll-track","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide logo-scroll-track">
            <!-- wp:image {"id":4723,"width":"80px","sizeSlug":"full","linkDestination":"none","className":"partner-logo","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"duotone":"unset"},"spacing":{"margin":{"top":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border partner-logo" style="margin-top:0"><img
                    src="http://localhost/wp-content/uploads/2025/05/vecteezy_apple_1199813.png" alt=""
                    class="wp-image-4723" style="border-style:none;border-width:0px;border-radius:0px;width:80px" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":4718,"width":"80px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"partner-logo","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border partner-logo"><img
                    src="http://localhost/wp-content/uploads/2025/05/vecteezy_google-icon-logo-symbol_22613027.png"
                    alt="" class="wp-image-4718"
                    style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover;width:80px;height:auto" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":4720,"width":"98px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","className":"partner-logo","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border partner-logo"><img
                    src="http://localhost/wp-content/uploads/2025/05/vecteezy_amazon-logo-on-a-pink-and-orange-button_57587744.png"
                    alt="" class="wp-image-4720"
                    style="border-style:none;border-width:0px;border-radius:0px;width:98px;height:auto" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":4716,"width":"80px","sizeSlug":"full","linkDestination":"none","align":"center","className":"partner-logo","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border partner-logo"><img
                    src="http://localhost/wp-content/uploads/2025/05/vecteezy_facebook-png-icon_16716447.png" alt=""
                    class="wp-image-4716" style="border-style:none;border-width:0px;border-radius:0px;width:80px" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->