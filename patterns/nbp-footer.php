<?php
/**
 * Title: NBP Footer
 * Slug: codersblocks/nbp-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline, input field, and links.
 *
 * @package WordPress
 * @subpackage Coders_Blocks
 * @since Coders Blocks 1.0
 */
?>
<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(74,85,104) 0%,rgb(102,105,110) 100%)","text":"#f7fafc"},"elements":{"link":{"color":{"text":"#f7fafc"}}},"spacing":{"padding":{"top":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-background has-link-color"
    style="color:#f7fafc;background:linear-gradient(135deg,rgb(74,85,104) 0%,rgb(102,105,110) 100%);padding-top:1.5rem">
    <!-- wp:group {"align":"full","className":"footer-container","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}},"border":{"radius":"0.38rem"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull footer-container"
        style="border-radius:0.38rem;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"220px"} -->
            <div class="wp-block-column" style="flex-basis:220px">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"writingMode":"horizontal-tb","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"1rem"}}},"fontSize":"large"} -->
                    <h6 class="wp-block-heading has-large-font-size"
                        style="margin-bottom:1rem;text-transform:capitalize;writing-mode:horizontal-tb">Services</h6>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem" class="wp-block-list has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a>Branding</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Design</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a>Marketing</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Advertisement</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"220px"} -->
            <div class="wp-block-column" style="flex-basis:220px">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"writingMode":"horizontal-tb","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"1rem"}}},"fontSize":"large"} -->
                    <h6 class="wp-block-heading has-large-font-size"
                        style="margin-bottom:1rem;text-transform:capitalize;writing-mode:horizontal-tb">
                        <strong>Company</strong>
                    </h6>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem" class="wp-block-list has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size">About Us</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size">Contact</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size">Jobs</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size">Press Kit</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"220px"} -->
            <div class="wp-block-column" style="flex-basis:220px">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"writingMode":"horizontal-tb","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"1rem"}}},"fontSize":"large"} -->
                    <h6 class="wp-block-heading has-large-font-size"
                        style="margin-bottom:1rem;text-transform:capitalize;writing-mode:horizontal-tb">
                        <strong>Legal</strong>
                    </h6>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"margin":{"top":"0.5rem"}}},"fontSize":"small"} -->
                    <ul style="margin-top:0.5rem" class="wp-block-list has-small-font-size">
                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Terms of use</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Privacy policy</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"footer-listitem","fontSize":"small"} -->
                        <li class="footer-listitem has-small-font-size"><a></a><a>Cookie policy</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"500px"} -->
            <div class="wp-block-column" style="flex-basis:500px">
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":6,"style":{"typography":{"writingMode":"horizontal-tb","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"1rem"}}},"fontSize":"large"} -->
                    <h6 class="wp-block-heading has-large-font-size"
                        style="margin-bottom:1rem;text-transform:capitalize;writing-mode:horizontal-tb">
                        <strong>Newsletter</strong>
                    </h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Enter your email address to get the latest updates.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"align":"left","className":"input-field","style":{"color":{"text":"#FFFFFF"},"elements":{"link":{"color":{"text":"#FFFFFF"}}}},"fontSize":"medium"} -->
                        <input type="email"
                            class="has-text-align-left input-field has-text-color has-link-color has-medium-font-size"
                            style="color:#FFFFFF" placeholder="you@example.com">
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"textAlign":"left","textColor":"base","className":"footer-btn","style":{"typography":{"writingMode":"horizontal-tb"},"color":{"background":"#2563eb"},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.5rem","bottom":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":"0.5rem"}}} -->
                            <div class="wp-block-button footer-btn" style="writing-mode:horizontal-tb"><a
                                    class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-text-align-left wp-element-button"
                                    style="border-radius:0.5rem;background-color:#2563eb;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">Subscribe</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"1.5rem","bottom":"1.5rem"}},"color":{"background":"#1f2937"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-background"
        style="background-color:#1f2937;padding-top:1.5rem;padding-right:1rem;padding-bottom:1.5rem;padding-left:1rem">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"align":"left","fontSize":"small"} -->
                    <p class="has-text-align-left has-small-font-size">©&nbsp;2025&nbsp;- All rights reserved by Coders
                        Time</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"330px"} -->
                <div class="wp-block-column" style="flex-basis:330px">
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group"
                        style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
                        <!-- wp:necessary-block/social-shares -->
                        <ul class="wp-block-necessary-block-social-shares">
                            <!-- wp:necessary-block/social-share {"url":null,"description":"Enhance the Excellence","service":"facebook","showLabels":true} -->
                            <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-facebook has-icon-color-color has-icon-background-color-background-color"
                                data-share="facebook">
                                <div class="wp-block-social-share-anchor"><svg width="24" height="24"
                                        viewBox="0 0 24 24" version="1.1" aria-hidden="true">
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z">
                                        </path>
                                    </svg><span
                                        class="wp-block-social-share-label screen-reader-text">Facebook</span><span
                                        class="screen-reader-text site-description">Enhance the Excellence</span></div>
                            </li>
                            <!-- /wp:necessary-block/social-share -->

                            <!-- wp:necessary-block/social-share {"url":null,"description":"Enhance the Excellence","service":"instagram","showLabels":true} -->
                            <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-instagram has-icon-color-color has-icon-background-color-background-color"
                                data-share="instagram">
                                <div class="wp-block-social-share-anchor"><svg width="24" height="24"
                                        viewBox="0 0 24 24" version="1.1" aria-hidden="true">
                                        <path
                                            d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
                                        </path>
                                    </svg><span
                                        class="wp-block-social-share-label screen-reader-text">Instagram</span><span
                                        class="screen-reader-text site-description">Enhance the Excellence</span></div>
                            </li>
                            <!-- /wp:necessary-block/social-share -->

                            <!-- wp:necessary-block/social-share {"url":null,"description":"Enhance the Excellence","service":"linkedin","showLabels":true} -->
                            <li class="wp-block-necessary-block-social-share wp-social-share wp-block-social-share wp-social-share-linkedin has-icon-color-color has-icon-background-color-background-color"
                                data-share="linkedin">
                                <div class="wp-block-social-share-anchor"><svg width="24" height="24"
                                        viewBox="0 0 24 24" version="1.1" aria-hidden="true">
                                        <path
                                            d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z">
                                        </path>
                                    </svg><span
                                        class="wp-block-social-share-label screen-reader-text">LinkedIn</span><span
                                        class="screen-reader-text site-description">Enhance the Excellence</span></div>
                            </li>
                            <!-- /wp:necessary-block/social-share -->
                        </ul>
                        <!-- /wp:necessary-block/social-shares -->
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
</div>
<!-- /wp:group -->