<?php
/**
 * Title: Header Hero Section
 * Slug: codersblocks/header-hero-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Hero style section for Header area.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since 1.0
 */
?>

<!-- wp:cover {"customOverlayColor":"#f5f7fa","minHeight":34,"minHeightUnit":"rem","isDark":false,"align":"full","className":"hero-pattern"} -->
<div class="wp-block-cover alignfull is-light hero-pattern" style="min-height:34rem">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f5f7fa"></span>
    <div class="wp-block-cover__inner-container">

        <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3rem"}}},"className":"p-animation-text-moveUp"} -->
            <div class="wp-block-columns alignwide p-animation-text-moveUp">

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":1,"textColor":"text-primary","className":"wp-block-heading"} -->
                    <h1 class="wp-block-heading has-text-primary-color has-text-color">
                        The Right Digital Solutions for your Business
                    </h1>
                    <!-- /wp:heading -->

                    <!-- wp:spacer {"height":"8px"} -->
                    <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:paragraph {"textColor":"text-primary"} -->
                    <p class="has-text-primary-color has-text-color">
                        We offer high speed, unparalleled security and 24/7 support.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:spacer {"height":"16px"} -->
                    <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button">
                                Request demo
                            </a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"textColor":"black","style":{"color":{"background":"#ebeefc"},"border":{"radius":"3px"}},"className":"is-style-fill"} -->
                        <div class="wp-block-button is-style-fill">
                            <a class="wp-block-button__link has-black-color has-text-color has-background wp-element-button" style="border-radius:3px;background-color:#ebeefc">
                                Schedule call
                            </a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"sizeSlug":"full","className":"rounded-xl overflow-hidden shadow-2xl"} -->
                    <figure class="wp-block-image size-full rounded-xl overflow-hidden shadow-2xl">
                        <img src="<?php echo  get_stylesheet_directory_uri() . '/images/bannar1.png'; ?>" alt="Digital Solutions Illustration" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

    </div>
</div>
<!-- /wp:cover -->
