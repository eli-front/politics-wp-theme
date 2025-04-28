<?php

/**
 * Title: Steve vision & impact page.
 * Slug: frost/steve-vision-and-impact
 * Categories: frost-page
 */
?>
<!-- wp:cover {"url":"http://localhost:8000/wp-content/uploads/2025/04/7Q4A1056-1.jpg","id":332,"dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.48,"y":0.23},"minHeight":369,"minHeightUnit":"px","isDark":false,"sizeSlug":"full","align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:var(--wp--preset--spacing--medium);min-height:369px">
  <img class="wp-block-cover__image-background wp-image-332 size-full" alt=""
    src="http://localhost:8000/wp-content/uploads/2025/04/7Q4A1056-1.jpg" style="object-position:48% 23%"
    data-object-fit="cover" data-object-position="48% 23%" /><span aria-hidden="true"
    class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1100px","wideSize":"1200px"}} -->
    <div class="wp-block-group">
      <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
      <h2 class="wp-block-heading has-base-color has-text-color has-link-color">Vision &amp; Impact</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
      <p class="has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:400">$70+ Million for
        St. Louis</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"categories":["featured"],"patternName":"frost/hero-one-column","name":"Section with image, text, buttons."},"align":"wide","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained","wideSize":"600px"}} -->
  <div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">I was proud to secure more than $70 million in critical funding for St. Louis and
      the 5th Senatorial District during the 2023 legislative session. Here is the breakdown:</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity" />
<!-- /wp:separator -->

<!-- wp:query {"queryId":12,"query":{"perPage":100,"pages":0,"offset":0,"postType":"impacts","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query">
  <!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"15rem"}} -->
  <!-- wp:group {"className":"impact-card","style":{"border":{"width":"1px","color":"#000000","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group impact-card has-border-color"
    style="border-color:#000000;border-width:1px;border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
    <!-- wp:post-title {"level":4} /-->

    <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":15,"className":"impact-excerpt","fontSize":"x-small"} /-->

    <!-- wp:mfb/meta-field-block {"textAlign":"right","fieldType":"acf","fieldName":"impact_amount","className":"impact-amount","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
  </div>
  <!-- /wp:group -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
  <!-- wp:query-pagination-previous /-->

  <!-- wp:query-pagination-numbers /-->

  <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->

  <!-- wp:query-no-results -->
  <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
  <p></p>
  <!-- /wp:paragraph -->
  <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<!-- wp:group {"metadata":{"categories":["call-to-action"],"patternName":"frost/cta-button-dark","name":"Call-to-action with text, button."},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|medium"}}},"backgroundColor":"neutral","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-base-color has-neutral-background-color has-text-color has-background"
  style="margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
  <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"720px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"max-36"} -->
  <p class="has-contrast-color has-text-color has-link-color has-max-36-font-size" style="line-height:1.5">Together, we
    have the chance to shape a stronger, more vibrant Missouri — one that works for all of us. Join us and be part of
    the change.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
  <div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
    <div class="wp-block-button"><a
        class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button"
        href="https://secure.actblue.com/donate/roberts-for-st--louis-2">Donate</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
