
      <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('usercenter/personal');?>">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/myorder');?>" class="active">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('home/collection');?>">我的收藏</a></li> -->
                  <!-- <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li> -->
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('home/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>">优惠劵</a></li>
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
                  <div class="order-tit clear">
                    <ul class="clear orderZt">
                        <li class="active"><a href="javascript:;">所有订单</a></li>
                        <li><a href="javascript:;">待付款</a></li>
                        <li><a href="javascript:;">待服务</a></li>
                        <li><a href="javascript:;">服务中</a></li>
                        <li><a href="javascript:;">待评价</a></li>
                        <li><a href="javascript:;">退款</a></li>
                        <li><a href="javascript:;">已评价</a></li>
                    </ul>
                  </div>
                  <div class="per-center">
                      <div class="per-basket">
                      <!-- 没有订单的时候 -->
                          <!-- <p><img src="skin/img/clz.png"> 您的菜篮子空空的哦，现在就去 <a href="javascript:;">订餐</a> 吧~</p> -->
                        <table class="am-table am-table-striped am-table-hover middle">
                        <tbody>
                        <?php foreach($record as $k=>$value):?>
                            <tr class="per-table">
                                <!-- <td class="old-food"><img src="skin/img/orderimg_03.png"></td> -->
                                <td>
                                    <p>订单号:<?=$value['BillNo']?></p>
                                    <?php foreach($value['FoodDetails'] as $v):?>
                                    <h2><?=$v['FoodName'];?> (X<?=$v['FoodNumber'];?>) <span class="hcolor">￥<?=$v['DiscountMoney'];?></span></h2>
                                    <?php endforeach;?>
                                </td>
                                <td>
                                    <p>提交时间:<?=substr($value['BillDate'], 0,10);?></p>
                                    <p>预约时间:<?=substr($value['AppointmentTime'], 0,10);?></p>
                                </td>
                                <td><h2 class="hcolor">￥ 123</h2></td>
                                <td><span class="grey zhuangtai"><?php switch ($value['State']) {
                                      case '0':
                                       echo "待付款";
                                        break;
                                      case '1':
                                      case '2':
                                      
                                      case '6':
                                          echo "待服务";
                                        break;
                                      case '3':
                                      case '4':
                                          echo "服务中";
                                        break;
                                      case '8':
                                          echo "待评价";
                                        break;
                                      case '7':
                                          echo "退款";
                                        break;
                                      case '10':
                                          echo "退款";
                                        break;
                                  }?></span></td>
                                <td>
                                 <?php switch ($value['State']) {
                                  case '0':
                                    echo "<a href='".site_url('home/payment?id=').$value['PoorderId'].'&money='.$value['Amount']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>付款</a>"; 
                                    echo "<a href='".site_url('home/orderState?id=').$value['PoorderId'].'&state=11'."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>取消订单</a>";
                                    break;
                                  case '1':
                                  case '2':
                                  case '6':
                                      echo "<a href='".site_url('home/orderState?id=').$value['PoorderId'].'&state=7'."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款</a>";
                                    break;
                                  case '7':
                                    echo "<a href='javascript:;' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款中</a>";
                                    break;
                                  case '8':
                                    echo "<a href='".site_url('home/commentTotal?id=').$value['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>评价</a>";
                                    echo "<a href='".site_url('home/delorder?id=').$value['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>删除</a>";
                                    break;
                                  case '9':
                                    echo "<a href='".site_url('home/share')."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>分享</a>";
                                    echo "<a href='".site_url('home/delorder?id=').$value['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>删除</a>";
                                    break;
                                  case '10':
                                       echo "<a href='javascript:;' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款成功</a>";
                                      break;
                                }?>


                              </td>
                            </tr>
                            <?php endforeach;?>
                            <!-- 待付款 -->

                        </tbody>
                        </table>
                      </div>
                  </div>
              </div>
              <!-- 足迹 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">美食足迹</li>
                    </ul>
                  </div>
                  <ul class="am-avg-sm-4 footmarks">
                      <li>
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('order/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
  </div>


<script src="skin/js/jquery.min.js"></script>
<script>
  $(function  () {
    $('.orderZt li').click(function(){
      $(this).addClass('active').siblings().removeClass('active');
      var title = $(this).find('a').html();
      // var order = $('.zhuangtai').html();
      $('.zhuangtai').each(function(){
        var tr = $(this).parent().parent();
        if ($(this).html() == title) {
          tr.removeClass('am-hide');
        }else if(title == '所有订单'){
          tr.removeClass('am-hide');
        }
        else{
          tr.addClass('am-hide');
        }
      })
    })
  })
</script>