<body>
 <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform bheader"> <!-- am-header-fixed header固定在顶部-->
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  <?=$name;?>
  </h1>

</header>
<div class="backNow">
<?php  echo str_replace('&nbsp;', ' ',htmlspecialchars_decode($content[0]['bannercontent'])) ;?>
	
	
</div>
</body>
</html>