<?php
// $Id$

/**
 * @file ting_result_page.tpl.php
 * Template for the search result page itself.
 */
?>
<div id="ting-search-results">

  <ul id="ting-search-tabs" class="ui-tabs-nav">
    <li class="ting spinning"><a href="#ting-result"><?php echo t('Materials') ?></a></li>
    <li class="content spinning"><a href="#content-result"><?php echo t('Website') ?></a></li>

    <?php if ($addon_content): ?>
      <li class="addon spinning"><a href="#addon-result"><?php echo t('Other results') ?></a></li>
    <?php endif; ?>
  </ul>

  <div id="ting-result">
    <div id="ting-search-placeholder"></div>
  </div>

  <div id="content-result" class="ui-tabs-hide">
    <div id="content-search-summary">
      <?php print t('Showing !firstResult-!lastResult of !count results',
                    array(
                      '!firstResult' => '<span class="firstResult"></span>',
                      '!lastResult' => '<span class="lastResult"></span>',
                      '!count' => '<span class="count"></span>',
                    )); ?>
    </div>
    <div id="content-search-result"></div>
  </div>

  <?php if ($addon_content): ?>
  <div id="addon-result" class="ui-tabs-hide">
    <div id="addon-search-result">
      <?php print $addon_content; ?>
    </div>
  </div>
  <?php endif; ?>

</div>
<div id="ting-search-spinner">
  <h4><?php print t('Searching'); ?>…</h4>
  <div class="spinner"></div>
</div>
