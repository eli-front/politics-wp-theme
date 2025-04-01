<?php

/**
 * Title: Footer with text, links.
 * Slug: frost/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"30px","right":"30px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","fontSize":"small","layout":{"type":"constrained"}} -->
<div
  class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background has-link-color has-small-font-size"
  style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px">
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column"><!-- wp:paragraph -->
      <p><strong>Navigation</strong></p>
      <!-- /wp:paragraph -->

      <!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"page","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
      <div class="wp-block-query">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
        <!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column"><!-- wp:paragraph -->
      <p><strong>Connect</strong></p>
      <!-- /wp:paragraph -->

      <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
      <ul class="wp-block-social-links"
        style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)">
        <!-- wp:social-link {"url":"https://www.facebook.com/robertsforstlouis","service":"facebook"} /-->

        <!-- wp:social-link {"url":"https://x.com/robertsforstl","service":"x"} /-->

        <!-- wp:social-link {"url":"https://www.instagram.com/stevencroberts/","service":"instagram"} /-->
      </ul>
      <!-- /wp:social-links -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
    <div class="wp-block-column"><!-- wp:paragraph -->
      <p><strong>Contact</strong></p>
      <!-- /wp:paragraph -->

      <!-- wp:spacer {"height":"15px"} -->
      <div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->

      <!-- wp:paragraph -->
      <p><a
          href="https://maps.google.com/maps?z=16&amp;q=roberts%2Bfor%2Bst.%2Blouis%2Bp.o.%2Bbox%2B771671%2Bst.%2Blouis%2C%2Bmo%2B63177"
          target="_blank" rel="noreferrer noopener">Roberts for St. Louis<br>P.O. Box 771671<br>St. Louis, MO 63177</a>
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p><a href="tel:3143849440">(314) 384-9440</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:separator -->
  <hr class="wp-block-separator has-alpha-channel-opacity" />
  <!-- /wp:separator -->

  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">Paid for by Roberts for St. Louis. © 2025 All Rights Reserved.</p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
