<?php
/**
 * Title: Team Section
 * Slug: codersblocks/team-section
 * Categories: featured, team
 * Keywords: 
 * Block Types: core/template-part/featured
 * Inserter: true
 * description: A section showcasing team members with their images, roles, social media links, and contact buttons.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","right":"0rem","left":"0rem"},"blockGap":"0"},"color":{"background":"#f3f4f6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
    style="background-color:#f3f4f6;padding-top:5rem;padding-right:0rem;padding-bottom:5rem;padding-left:0rem">
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#2563eb"},"elements":{"link":{"color":{"text":"#2563eb"}}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"medium"} -->
    <p class="has-text-align-center has-text-color has-link-color has-medium-font-size"
        style="color:#2563eb;letter-spacing:0.1em;text-transform:uppercase"><strong>Our Team</strong></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem"}}}} -->
    <h1 class="wp-block-heading has-text-align-center has-text-color has-link-color"
        style="color:#1f2937;margin-top:1rem"><strong>Meet The Experts</strong></h1>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"2rem","bottom":"0rem"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="margin-top:2rem;margin-bottom:0rem">
        <!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"0rem"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns alignfull" style="margin-bottom:0rem">
            <!-- wp:column {"className":"member-card","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-column member-card has-base-background-color has-background">
                <!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"right"}} -->
                <div class="wp-block-group has-base-background-color has-background">
                    <!-- wp:image {"id":4806,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","bottom":"4px"}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border is-style-default"
                        style="margin-right:0px;margin-bottom:4px;margin-left:0px"><img
                            src="http://localhost/wp-content/uploads/2025/05/person1.png" alt="" class="wp-image-4806"
                            style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}}},"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color has-medium-font-size"
                        style="color:#1f2937;margin-top:1rem;margin-bottom:0"><strong>John Doe</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4b5563"},"elements":{"link":{"color":{"text":"#4b5563"}}},"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-text-color has-link-color has-small-font-size"
                        style="color:#4b5563;margin-top:0.5rem">CEO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"
                        style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:image {"id":4809,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-linkedin","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-linkedin"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/twitter.png" alt=""
                                class="wp-image-4809"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4807,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-twiter","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-twiter"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/linkedin-1.png" alt=""
                                class="wp-image-4807"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4810,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-instagram","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-instagram"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/instagram.png" alt=""
                                class="wp-image-4810"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4811,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-facebook","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-facebook"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/facebook-1.png" alt=""
                                class="wp-image-4811"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                    <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--50)">
                        <!-- wp:button {"className":"member-card-button","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%)"},"border":{"radius":"2rem"}}} -->
                        <div class="wp-block-button member-card-button"><a
                                class="wp-block-button__link has-background wp-element-button"
                                style="border-radius:2rem;background:linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%);padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">Contact
                                John</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"member-card","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-column member-card has-base-background-color has-background">
                <!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"right"}} -->
                <div class="wp-block-group has-base-background-color has-background">
                    <!-- wp:image {"id":4844,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","bottom":"4px"}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border is-style-default"
                        style="margin-right:0px;margin-bottom:4px;margin-left:0px"><img
                            src="http://localhost/wp-content/uploads/2025/05/person2.png" alt="" class="wp-image-4844"
                            style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}}},"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color has-medium-font-size"
                        style="color:#1f2937;margin-top:1rem;margin-bottom:0"><strong>John Doe</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4b5563"},"elements":{"link":{"color":{"text":"#4b5563"}}},"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-text-color has-link-color has-small-font-size"
                        style="color:#4b5563;margin-top:0.5rem">CEO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:image {"id":4809,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-linkedin","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-linkedin"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/twitter.png" alt=""
                                class="wp-image-4809"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4807,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-twiter","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-twiter"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/linkedin-1.png" alt=""
                                class="wp-image-4807"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4810,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-instagram","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-instagram"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/instagram.png" alt=""
                                class="wp-image-4810"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4811,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-facebook","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-facebook"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/facebook-1.png" alt=""
                                class="wp-image-4811"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                    <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--50)">
                        <!-- wp:button {"className":"member-card-button","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%)"},"border":{"radius":"2rem"}}} -->
                        <div class="wp-block-button member-card-button"><a
                                class="wp-block-button__link has-background wp-element-button"
                                style="border-radius:2rem;background:linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%);padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">Contact
                                John</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"member-card","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-column member-card has-base-background-color has-background">
                <!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"right"}} -->
                <div class="wp-block-group has-base-background-color has-background">
                    <!-- wp:image {"id":4844,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","bottom":"4px"}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border is-style-default"
                        style="margin-right:0px;margin-bottom:4px;margin-left:0px"><img
                            src="http://localhost/wp-content/uploads/2025/05/person3.png" alt="" class="wp-image-4844"
                            style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}}},"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color has-medium-font-size"
                        style="color:#1f2937;margin-top:1rem;margin-bottom:0"><strong>John Doe</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4b5563"},"elements":{"link":{"color":{"text":"#4b5563"}}},"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-text-color has-link-color has-small-font-size"
                        style="color:#4b5563;margin-top:0.5rem">CEO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"
                        style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:image {"id":4809,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-linkedin","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-linkedin"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/twitter.png" alt=""
                                class="wp-image-4809"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4807,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-twiter","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-twiter"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/linkedin-1.png" alt=""
                                class="wp-image-4807"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4810,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-instagram","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-instagram"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/instagram.png" alt=""
                                class="wp-image-4810"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4811,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-facebook","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-facebook"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/facebook-1.png" alt=""
                                class="wp-image-4811"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                    <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--50)">
                        <!-- wp:button {"className":"member-card-button","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%)"},"border":{"radius":"2rem"}}} -->
                        <div class="wp-block-button member-card-button"><a
                                class="wp-block-button__link has-background wp-element-button"
                                style="border-radius:2rem;background:linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%);padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">Contact
                                John</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"member-card","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-column member-card has-base-background-color has-background">
                <!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"right"}} -->
                <div class="wp-block-group has-base-background-color has-background">
                    <!-- wp:image {"id":4846,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"spacing":{"margin":{"right":"0px","left":"0px","bottom":"4px"}},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border is-style-default"
                        style="margin-right:0px;margin-bottom:4px;margin-left:0px"><img
                            src="http://localhost/wp-content/uploads/2025/05/person4.png" alt="" class="wp-image-4846"
                            style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"className":"image-section","style":{"color":{"text":"#1f2937"},"elements":{"link":{"color":{"text":"#1f2937"}}},"spacing":{"margin":{"top":"1rem","bottom":"0"}}},"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center image-section has-text-color has-link-color has-medium-font-size"
                        style="color:#1f2937;margin-top:1rem;margin-bottom:0"><strong>John Doe</strong></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4b5563"},"elements":{"link":{"color":{"text":"#4b5563"}}},"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-text-color has-link-color has-small-font-size"
                        style="color:#4b5563;margin-top:0.5rem">CEO</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"
                        style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:image {"id":4809,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-linkedin","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-linkedin"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/twitter.png" alt=""
                                class="wp-image-4809"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4807,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-twiter","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-twiter"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/linkedin-1.png" alt=""
                                class="wp-image-4807"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4810,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-instagram","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-instagram"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/instagram.png" alt=""
                                class="wp-image-4810"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"id":4811,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default member-facebook","style":{"spacing":{"margin":{"right":"0px","left":"0px"}},"border":{"radius":"100px","width":"0px","style":"none"}}} -->
                        <figure
                            class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default member-facebook"
                            style="margin-right:0px;margin-left:0px"><img
                                src="http://localhost/wp-content/uploads/2025/05/facebook-1.png" alt=""
                                class="wp-image-4811"
                                style="border-style:none;border-width:0px;border-radius:100px;object-fit:cover;width:40px;height:40px" />
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
                    <div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--50)">
                        <!-- wp:button {"className":"member-card-button","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.7rem","bottom":"0.7rem"}},"color":{"gradient":"linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%)"},"border":{"radius":"2rem"}}} -->
                        <div class="wp-block-button member-card-button"><a
                                class="wp-block-button__link has-background wp-element-button"
                                style="border-radius:2rem;background:linear-gradient(135deg,rgb(59,130,246) 2%,rgb(99,102,241) 100%);padding-top:0.7rem;padding-right:1rem;padding-bottom:0.7rem;padding-left:1rem">Contact
                                John</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->