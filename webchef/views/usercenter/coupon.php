
      <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('usercenter/personal');?>">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/myorder');?>">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('usercenter/collection');?>">我的收藏</a></li> -->
              <!--     <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li> -->
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('usercenter/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>" class="active">优惠劵</a></li>
                  <li><a href="<?=site_url('usercenter/member');?>">会员卡</a></li>
              </ul>
            </div>
            <div class="per-nav per-last">
              <h1>设置</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/userInfo');?>">个人信息</a></li>
                  <li><a href="<?=site_url('usercenter/address');?>">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr">
              
              <!--  最近订单 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">优惠劵</li>
                    </ul>
                  </div>
                  <div class="per-center">
                      <div class="per-basket">
                          <div class="coupon">
                          <!-- 没有优惠劵 -->
                              <!-- <p class="crr_not">无可用优惠劵</p> -->
                              <ul class="am-avg-sm-4">
                              <?php if(!empty($cards)):?>
                                <?php foreach($cards as $v):?>
                                  <li>
                                      <div class="coupon_bg coupon_pic1">
                                          <h1>￥<span><?=$v['coupponmoney'];?></span></h1>
                                          <p>菜品: <?=$v['coupponname'];?></p>
                                          <p>使用条件: 满<?=$v['usethreshold'];?></p>
                                          <p>有效时间: <?=substr($v['begintime'], 0,10);?>~<?=substr($v['endtime'], 0,10);?></p>
                                      </div>
                                  </li>
                                <?php endforeach;?>
                                <?php else:?>
                                    <li>
                                      你还没有优惠卷！
                                    </li>
                                <?php endif; ?>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
      </div>
  </div>


<script src="skin/js/jquery.min.js"></script>