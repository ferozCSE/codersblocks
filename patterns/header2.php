<?php
/**
 * Title: Header2
 * Slug: codersblocks/header2
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
    
      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:image {"id":8,"width":"100px","aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized">
          <img src="http://localhost/wp-content/uploads/2025/05/necessary-block-icon.png" alt="" class="wp-image-8" style="aspect-ratio:3/2;object-fit:cover;width:100px"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:site-title {"isLink":false,"style":{"color":{"text":"#4688b0"},"elements":{"link":{"color":{"text":"#4688b0"}}}}} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:navigation {"ref":4} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:buttons {"align":"wide"} -->
        <div class="wp-block-buttons alignwide">
          <!-- wp:button {"textColor":"base","className":"is-style-fill","style":{"border":{"width":"0px","style":"none","radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"medium"} -->
          <div class="wp-block-button is-style-fill">
            <a class="wp-block-button__link has-base-color has-text-color has-link-color has-medium-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Login</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
  </div>
<!-- /wp:group -->