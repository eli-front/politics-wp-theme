<?php

/**
 * Title: Starter Steve Roberts In the News Page 
 * Slug: frost/page-in-the-news-steve
 * Categories: frost-page
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"bottom":"0"},"margin":{"bottom":"10px"}},"typography":{"lineHeight":"1"}}} -->
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:10px;padding-bottom:0;line-height:1">In the
    News</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
  <p class="has-text-align-center has-x-small-font-size">Recent news about Sen. Steve Roberts</p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":17,"query":{"perPage":10,"pages":0,"offset":0,"postType":"external_news","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"frost/posts-list","name":"List of posts in three columns."},"className":"alignwide"} -->
<div class="wp-block-query alignwide">
  <!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
  <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"
    style="margin-bottom:var(--wp--preset--spacing--small)" />
  <!-- /wp:separator -->

  <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default","columnCount":3}} -->
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
    <div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-date {"fontSize":"x-small"} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

      <!-- wp:post-excerpt {"moreText":"","excerptLength":30,"fontSize":"small"} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"25%"} -->
    <div class="wp-block-column" style="flex-basis:25%">
      <!-- wp:post-terms {"term":"post_tag","textAlign":"right","fontSize":"x-small"} /-->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:separator {"className":"is-style-wide"} -->
  <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
  <!-- /wp:separator -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
  <!-- wp:query-pagination-previous /-->

  <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"130px"} -->
<div style="height:130px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
