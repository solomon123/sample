<div class="l-page">
  <header class="l-header" role="banner">
    <div class="l-branding">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
<!--
      <?php //if ($site_name || $site_slogan): ?>

        <?php //if ($site_name): ?>
          <h1 class="site-name">
            <a href="<?php //print $front_page; ?>" title="<?php //print t('Home'); ?>" rel="home"><span><?php //print $site_name; ?></span></a>
          </h1>
        <?php //endif; ?>

        <?php //if ($site_slogan): ?>
          <h2 class="site-slogan"><?php //print $site_slogan; ?></h2>
        <?php //endif; ?>
      <?php //endif; ?>
-->
      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  
    
    <div class="l-slide" role="main">
       <?php print render($page['main_video']); ?>
       <?php print render($page['main_audio']); ?>
    </div>

    <div class="l-sectional" role="main">
      <?php print render($page['sectional_one']); ?>
      <?php print render($page['sectional_two']); ?>
      <?php print render($page['sectional_three']); ?>      
    </div>

<div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php //print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php //print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if(drupal_is_front_page()){?>
      <?php $page['content']['system_main']['default_message']=array(); ?>
      <?php print render($page['content']); ?>
      <?php } ?>
      <?php print $feed_icons; ?>

      
    </div>

    <?php print render($page['sidebar_second']); ?>
    
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer_gallary']); ?>
     <div id="copyright">
     <p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?> </p> <p class="credits"> <?php print t('Designed by'); ?>  <a href="http://www.mulutube.com">Mulutube</a></p>
    <div class="clear"></div>
    </div>
    <?php print render($page['footer']); ?>

  </footer>
</div>
