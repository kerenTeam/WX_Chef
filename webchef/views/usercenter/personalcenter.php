
        <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('usercenter/personal');?>" class="active">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/myorder');?>">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('home/collection');?>">我的收藏</a></li> -->
                  <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li>
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
          <?php if(!empty($users)):?>
          <div class="per-pr">
              <div class="per-info clear">
                <div class="per-left">
                    <div class="per-portrait">
                    <?php if($users[0]['userimage']):?>
                        <img src="<?=IP.$users[0]['userimage'];?>" alt="">
                    <?php else:?>
                        <img src="skin/img/portrait_03.png">
                    <?php endif;?>
                    </div>
                    <div class="per-name">
                        <h2>晚上好,<span>-<?php if($users[0]['username']){echo $users[0]['username'];}else{echo $users[0]['userphone'];}?></span></h2>
                        <P>账户安全: <b>中</b>&nbsp;&nbsp;&nbsp;<a href="javascript:;">提升等级</a></P>
                    </div>
                  </div>
                  <div class="per-right">
                    <ul>
                      <li>
                        <h2>账户余额</h2>
                        <p><?=$users[0]['openmoney']?></p>
                      </li>
                      <li>
                        <h2>我的积分</h2>
                        <p><?=$users[0]['integral'];?></p>
                      </li>
                      <li>
                        <h2>优惠劵</h2>
                        <p>0</p>
                      </li>
                    </ul>
                  </div>
              </div>
              <!--  最近订单 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">最近订单</li>
                    </ul>
                    <a href="<?=site_url('usercenter/myorder');?>">查看全部订单 ></a>
                  </div>
                  <div class="per-center">
                      <div class="per-basket">
                      <!-- 没有订单的时候 -->
                          <!-- <p><img src="skin/img/clz.png"> 您的菜篮子空空的哦，现在就去 <a href="javascript:;">订餐</a> 吧~</p> -->
                        <table class="am-table am-table-striped am-table-hover middle">
                        <tbody>
                          <?php foreach($record as $k=>$v):?>
                            <?php if($k > 2) break; ?>

                            <tr class="per-table">
                                <!-- <td class="old-food"><img src="skin/img/orderimg_03.png"></td> -->
                                <td>
                                    <p>订单号:<?=$v['BillNo'];?></p>
                                    <?php foreach($v['FoodDetails'] as $val):?>
                                    <h2><?=$val['FoodName'];?> (X<?=$val['FoodNumber'];?>) <span class="hcolor">￥<?=$val['DiscountMoney'];?></span></h2>
                                    <?php endforeach;?>
                                </td>
                                <td>
                                    <p>提交时间:<?=substr($v['BillDate'],0,10);?></p>
                                    <p>预约时间:<?=substr($v['AppointmentTime'],0,10);?></p>
                                </td>
                                <td><span class="grey"><?php switch ($v['State']) {
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
                                <td> <?php switch ($v['State']) {
            case '0':
              echo "<a href='".site_url('home/payment?id=').$v['PoorderId'].'&money='.$v['Amount']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>付款</a>"; 
              echo "<a href='".site_url('home/orderState?id=').$v['PoorderId'].'&state=11'."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>取消订单</a>";
              break;
            case '1':
            case '2':
            case '6':
                echo "<a href='".site_url('home/orderState?id=').$v['PoorderId'].'&state=7'."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款</a>";
              break;
            case '7':
              echo "<a href='javascript:;' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款中</a>";
              break;
            case '8':
              echo "<a href='".site_url('home/commentTotal?id=').$v['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>评价</a>";
              echo "<a href='".site_url('home/delorder?id=').$v['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>删除</a>";
              break;
            case '9':
              echo "<a href='".site_url('home/share')."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>分享</a>";
              echo "<a href='".site_url('home/delorder?id=').$v['PoorderId']."' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>删除</a>";
              break;
            case '10':
                 echo "<a href='javascript:;' class='am-fr am-btn am-btn-primary bgreen am-btn-xs'>退款成功</a>";
                break;
          }?></td>
                            </tr>
                          <?php endforeach;?>
                         
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
                        <li>我的收藏</li>
                    </ul>
                  </div>
                  <ul class="am-avg-sm-4 footmarks">
                      <li>
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
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
        <?php else:?>
            <div class="per-pr">
              <div class="per-info clear">
                <div class="per-left">
                    <div class="per-portrait">
                        <img src="skin/img/portrait_03.png">
                    </div>
                    <div class="per-name">
                        <h2>晚上好,<span>-LERSUNY</span></h2>
                        <P>账户安全: <b>中</b>&nbsp;&nbsp;&nbsp;<a href="javascript:;">提升等级</a></P>
                    </div>
                  </div>
                  <div class="per-right">
                    <ul>
                      <li>
                        <h2>账户余额</h2>
                        <p>0</p>
                      </li>
                      <li>
                        <h2>我的积分</h2>
                        <p>0</p>
                      </li>
                      <li>
                        <h2>优惠劵</h2>
                        <p>0</p>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
        <?php endif;?>
      </div>
      </div>
  </div>


<script src="skin/js/jquery.min.js"></script>