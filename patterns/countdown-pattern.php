<?php
/**
 * Title: CountDown Pattern
 * Slug: codersblocks/countdown-pattern
 * Categories: featured
 * Keywords: countdown, timer, deal
 * Block Types: core/template-part/featured
 * Inserter: true
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"},"margin":{"top":"40px","bottom":"40px"}},"border":{"radius":{"topLeft":"45px","topRight":"45%","bottomLeft":"45%","bottomRight":"15em"},"width":"3px","style":"dashed","color":"#3582c4"}},"backgroundColor":"coders-light-blue","textColor":"coders-dark-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-coders-dark-blue-color has-coders-light-blue-background-color has-text-color has-background" style="border-style:dashed;border-color:#3582c4;border-width:3px;border-top-left-radius:45px;border-top-right-radius:45%;border-bottom-left-radius:45%;border-bottom-right-radius:15em;margin-top:40px;margin-bottom:40px;padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px">
    <!-- wp:html -->
    <div class="countdown-timer" data-enddate="2025-05-23">
        <div class="countdown-buttons">
            <button class="countdown-button days">Days</button>
            <button class="countdown-button hours">Hours</button>
            <button class="countdown-button minutes">Minutes</button>
            <button class="countdown-button seconds">Seconds</button>
        </div>
    </div>
    <!-- /wp:html -->
</div>
<!-- /wp:group -->