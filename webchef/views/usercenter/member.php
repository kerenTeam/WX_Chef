<style>
.fitem {
    width: 100%;
    margin-bottom: 20px;
    position: relative;
}
.fitem img {
    width: 100%;
}
.open {
    position: absolute;
    top: 12px;
    right: 12px;
    color: rgba(94, 185, 94, 0.55);
    font-size: 1.4rem;
    border: 1px solid rgba(94, 185, 94, 0.51);
    padding: 0px 5px;
    border-radius: 3px;
}
</style>
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
                 <!--  <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li> -->
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('usercenter/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>">优惠劵</a></li>
                  <li><a href="<?=site_url('usercenter/member');?>" class="active">会员卡</a></li>
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
                        <li class="active">会员卡</li>
                    </ul>
                  </div>
                  <div class="per-center">
                      <div class="per-basket">
                      		<div class="member">
                      			<div class="mem-group">
                      				账户: <i>18023158000</i>
                      			</div>
                      			<div class="mem-group">
                      				账户余额: <span>230.00元</span><a href="javascript:;" class="am-btn am-btn-default am-btn-xs memcz">充值</a>
                      			</div>
                      		</div>
                      </div>
                      <!-- 会员卡 -->
                      <div class="am-g">
                      <?php foreach($vipcard as $v):?>
                        <div class="am-u-sm-3">
                          <div class="fitem">
                            <img src="<?=IP.$v['img']?>" alt="">
                            <a href="" class="open">开通</a>
                          </div>
                        </div>
                      <?php endforeach;?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </div>

<script src="skin/js/jquery.min.js"></script>