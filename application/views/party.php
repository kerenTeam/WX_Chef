<link rel="stylesheet" href="skin/css/styles.css">
<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    宴会定制
    </h1>
    
  </header>
  <article class="htmleaf-container">
    <!--   <div class="demo"> -->
    <div class="demo__content">
      <div class="demo__card-cont">
        <a href="<?php echo site_url('home/dinner')?>">
          <div class="demo__card am-shadow">
            <div class="demo__card__top">
              <div class="demo__card__img"><img src="skin/img/party1.png" alt=""></div>
              <p class="demo__card__name">婚宴套餐</p>
            </div>
            <div class="demo__card__btm">
              <p class="demo__card__we"><span class="am-icon-cny"> 1288</span></p>
            </div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__drag"></div>
          </div>
        </a>
        <a href="<?php echo site_url('home/dinner')?>">
          <div class="demo__card am-shadow">
            <div class="demo__card__top">
              <div class="demo__card__img"><img src="skin/img/party1.png" alt=""></div>
              <p class="demo__card__name">婚宴套餐</p>
            </div>
            <div class="demo__card__btm">
              <p class="demo__card__we"><span class="am-icon-cny"> 988</span></p>
            </div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__drag"></div>
          </div>
        </a>
        <a href="<?php echo site_url('home/dinner')?>">
          <div class="demo__card am-shadow">
            <div class="demo__card__top">
              <div class="demo__card__img"><img src="skin/img/party1.png" alt=""></div>
              <p class="demo__card__name">寿宴套餐</p>
            </div>
            <div class="demo__card__btm">
              <p class="demo__card__we"><span class="am-icon-cny"> 1088</span></p>
            </div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__drag"></div>
          </div>
        </a>
        <a href="<?php echo site_url('home/dinner')?>">
          <div class="demo__card am-shadow">
            <div class="demo__card__top">
              <div class="demo__card__img"><img src="skin/img/party1.png" alt=""></div>
              <p class="demo__card__name">团拜宴套餐</p>
            </div>
            <div class="demo__card__btm">
              <p class="demo__card__we"><span class="am-icon-cny"> 1288</span></p>
            </div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__drag"></div>
          </div>
        </a>
        <a href="<?php echo site_url('home/dinner')?>">
          <div class="demo__card am-shadow">
            <div class="demo__card__top">
              <div class="demo__card__img"><img src="skin/img/party1.png" alt=""></div>
              <p class="demo__card__name">团拜宴套餐</p>
            </div>
            <div class="demo__card__btm">
              <p class="demo__card__we"><span class="am-icon-cny"> 899</span></p>
            </div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__choice"></div>
            <div class="demo__card__drag"></div>
          </div>
        </a>
        
      </div>
      <p class="demo__tip gray">左右滑动切换更多</p>
    </div>
    <!-- </div> -->
  </article>
  <script src='skin/js/jquery.min.js'></script>
  <script src='skin/js/stopExecutionOnTimeout.js?t=1'></script>
  <script>
  $(document).ready(function () {
  var animating = false;
  var cardsCounter = 0;
  var numOfCards = 6;
  var decisionVal = 80;
  var pullDeltaX = 0;
  var deg = 0;
  var $card, $cardReject, $cardLike;
  function pullChange() {
  animating = true;
  deg = pullDeltaX / 10;
  $card.css('transform', 'translateX(' + pullDeltaX + 'px) rotate(' + deg + 'deg)');
  var opacity = pullDeltaX / 100;
  var rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
  var likeOpacity = opacity <= 0 ? 0 : opacity;
  $cardReject.css('opacity', rejectOpacity);
  $cardLike.css('opacity', likeOpacity);
  }
  ;
  function release() {
  if (pullDeltaX >= decisionVal) {
  $card.addClass('to-right');
  } else if (pullDeltaX <= -decisionVal) {
  $card.addClass('to-left');
  }
  if (Math.abs(pullDeltaX) >= decisionVal) {
  $card.addClass('inactive');
  setTimeout(function () {
  $card.addClass('below').removeClass('inactive to-left to-right');
  cardsCounter++;
  if (cardsCounter === numOfCards) {
  cardsCounter = 0;
  $('.demo__card').removeClass('below');
  }
  }, 300);
  }
  if (Math.abs(pullDeltaX) < decisionVal) {
  $card.addClass('reset');
  }
  setTimeout(function () {
  $card.attr('style', '').removeClass('reset').find('.demo__card__choice').attr('style', '');
  pullDeltaX = 0;
  animating = false;
  }, 300);
  };
  $(document).on('mousedown touchstart', '.demo__card:not(.inactive)', function (e) {
  if (animating)
  return;
  $card = $(this);
  $cardReject = $('.demo__card__choice.m--reject', $card);
  $cardLike = $('.demo__card__choice.m--like', $card);
  var startX = e.pageX || e.originalEvent.touches[0].pageX;
  $(document).on('mousemove touchmove', function (e) {
  var x = e.pageX || e.originalEvent.touches[0].pageX;
  pullDeltaX = x - startX;
  if (!pullDeltaX)
  return;
  pullChange();
  });
  $(document).on('mouseup touchend', function () {
  $(document).off('mousemove touchmove mouseup touchend');
  if (!pullDeltaX)
  return;
  release();
  });
  });
  });
  </script>

</body>
</html>