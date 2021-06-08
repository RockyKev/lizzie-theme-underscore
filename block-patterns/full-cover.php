<?php
// $image = "butts";
$image = get_template_directory() . "/src/images/galaxy.jpeg";

?>

<!-- wp:cover {"url":"<?= $image; ?>","id":11,"isRepeated":true,"dimRatio":0,"minHeight":576,"minHeightUnit":"px","gradient":"very-light-gray-to-cyan-bluish-gray","contentPosition":"center center","align":"wide","className":"is-position-center-center"} -->
<div class="wp-block-cover alignwide is-repeated has-background-gradient is-position-center-center" style="background-image:url(<?= $image; ?>);min-height:576px">
  <div class="wp-block-cover__inner-container">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column {"width":"12%"} -->
      <div class="wp-block-column" style="flex-basis:12%">
        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontSize":68,"lineHeight":"1.2"},"color":{"text":"#fffffa"}}} -->
        <p class="has-text-align-left has-text-color" style="color:#fffffa;font-size:68px;line-height:1.2">
          <strong>THIS SWAG hast seen<br>nothing yet</strong>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"borderRadius":3,"style":{"color":{"background":"#fffffa","text":"#00000a"}}} -->
          <div class="wp-block-button">
            <a class="wp-block-button__link has-text-color has-background" style="border-radius:3px;background-color:#fffffa;color:#00000a">Read now</a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"12%"} -->
      <div class="wp-block-column" style="flex-basis:12%">
        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
</div>
<!-- /wp:cover -->