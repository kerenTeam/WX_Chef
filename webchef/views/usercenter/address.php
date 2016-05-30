

    <link rel="stylesheet" type="text/css" href="skin/css/collect.css">
    <link href="skin/css/city.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .infolist .liststyle span{
          width: 30%;
        }
        .liststyle>span>i{
          color: #494949;
        }
        body{
          background: #f5f2f2;
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
                  <li><a href="<?=site_url('usercenter/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('usercenter/back');?>">我的退款</a></li>
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('usercenter/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('usercenter/coupon');?>">优惠劵</a></li>
                  <li><a href="<?=site_url('usercenter/member');?>">会员卡</a></li>
              </ul>
            </div>
            <div class="per-nav per-last">
              <h1>设置</h1>
              <ul>
                  <li><a href="<?=site_url('usercenter/userInfo');?>">个人信息</a></li>
                  <li><a href="<?=site_url('usercenter/address');?>" class="active">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr">
              <!-- 收货地址 -->
              <div class="address">
                  <h1>收货地址</h1>
                  <p>新增收货地址</p>
                  <form class="am-form am-form-horizontal phone_yz address_form" action="<?=site_url('Usercenter/addressAdd');?>" method="post">
                      <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label"><i>*</i> 所在地区</label>
                        <div class="am-u-sm-9">
                          <div class="demo">
                            <div class="infolist">
                              <div class="liststyle">
                                <span>
                                  <i>成都市</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="成都市">成都市</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_City" value="成都市">
                                </span>
                                <span id="Area">
                                  <i>请选择地区</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Area" value="请选择地区">
                                </span>
                                <span id="Insurer">
                                  <i>请选择乡镇街道</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label"><i>*</i> 详细地址</label>
                        <div class="am-u-sm-9">
                          <textarea rows="5" name="address" placeholder="请输入详细地址" required></textarea>
                        </div>
                      </div>

                      <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label"><i>*</i> 收货人姓名</label>
                        <div class="am-u-sm-9">
                            <input type="text" style="width: 50%" name="username" placeholder="请输入您的姓名" required/>
                        </div>
                      </div>

                      <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label"><i>*</i> 手机号码</label>
                        <div class="am-u-sm-9">
                            <input type="text" style="width: 60%" class="phone" name="GoodsPhone" placeholder="请输入您的电话" required/>
                            <span></span>
                        </div>
                      </div>

                      <div class="am-form-group">
                        <div class="am-u-sm-offset-3 am-u-sm-9">
                          <div class="checkbox">
                            <label class="am-checkbox am-danger" style="padding-top: 0">
                              <input type="checkbox" data-am-ucheck name="IsDefault" value="1" /> 设置为默认收货地址
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-offset-3">
                          <button type="submit" class="am-btn am-btn-danger">保存</button>
                        </div>
                      </div>
                  </form>
                  <p>已保存收货地址</p>
                  <?php if(!empty($address)):?>
                  <table class="am-table am-table-striped am-table-hover myback">
                        <thead>
                            <tr>
                                <th>收货人</th>
                                <th>详细地址</th>
                                <th>手机</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($address as $k=>$v):?>
                            <tr>
                                <td class="userName"><?=$v['name'];?></td>
                                <td class="address"><?=$v['address'];?></td>
                                <td class="userPhone"><?=$v['goodsphone'];?></td>
                                <td class="adr_cz"><a id="<?=$v['memberaddressid'];?>" class="adrchange" href="javasctipt:;" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 800}">修改</a>/<a href="<?=site_url('usercenter/deladdress?id=').$v['memberaddressid'];?>">删除</a></td>
                            </tr>
                          <?php endforeach;?>
                        </tbody>
                        </table>
                        <?php else:?>
                          你还没有添加收货地址！
                        <?php endif;?>
              </div>
              
          </div>
      </div>
      </div>
  </div>

<!-- 修改地址弹出框 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
  <div class="am-modal-dialog">
    <div class="am-modal-hd txt-l"> <b>修改地址</b>
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <form class=" am-form clear phone_yz" action="<?=site_url('usercenter/editaddress');?>" method="post">
        <input type="hidden" name="adrId" value="">
        <div class="am-form-group clear">
          <label class="am-u-sm-3 am-form-label txt-r"> 姓名</label>
          <div class="am-u-sm-9 txt-l sm-input">
            <input type="text" class="changeName" placeholder="请输入您的姓名" required value="张某某" name='name' />
          </div>
        </div>
        <div class="am-form-group clear">
          <label class="am-u-sm-3 am-form-label txt-r"> 所在地区</label>
          <div class="am-u-sm-9 txt-l">
            <div class="demo">
              <div class="infolist">
                <div class="liststyle">
                  <span id="Province1" style="display:none;">
                    <i>请选择省份</i>
                    <ul>
                      <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                    </ul>
                    <input type="hidden" name="cho_Province" value="请选择省份">
                  </span>
                  <span>
                    <i>成都市</i>
                    <ul>
                      <li><a href="javascript:void(0)" alt="成都市">成都市</a></li>
                    </ul>
                    <input type="hidden" name="cho_City" value="成都市">
                  </span>
                  <span id="Area1">
                    <i>请选择地区</i>
                    <ul>
                      <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                    </ul>
                    <input type="hidden" name="cho_Area" value="请选择地区">
                  </span>
                  <span id="Insurer1">
                    <i>请选择乡镇街道</i>
                    <ul>
                      <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                    </ul>
                    <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="am-form-group clear">
          <label class="am-u-sm-3 am-form-label txt-r"> 详细地址</label>
          <div class="am-u-sm-9 txt-l">
            <textarea rows="5" placeholder="请输入详细地址" required name="address"></textarea>
          </div>
        </div>
        <div class="am-form-group clear">
          <label class="am-u-sm-3 am-form-label txt-r"> 手机号</label>
          <div class="am-u-sm-9 txt-l sm-input">
            <input type="tel" required value="15608097597" class="phone" placeholder="请输入您的手机号" name="GoodsPhone" />
            <span></span>
          </div>
        </div>
        <div class="am-form-group">
          <div class="am-u-sm-9 am-u-sm-offset-3 txt-l">
            <button type="submit" class="am-btn am-btn-secondary">保存</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="skin/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="skin/js/city4.city.js"></script>
<script type="text/javascript" src="skin/js/city4.js"></script>
<script type="text/javascript">
$(function(){
  $.fn.citySelect({setId:['#Province1' , '#City1' , '#Area1','#Insurer1']});
  $('.adrchange').click(function(){
    var name = $(this).parent().parent().find('.userName').html();
    var address = $(this).parent().parent().find('.address').html();
    var phone = $(this).parent().parent().find('.userPhone').html();
    var id = $(this).attr('id');
    $('.phone_yz').find('.changeName').val(name);
    $('.phone_yz').find('.phone').val(phone);
    $('.phone_yz').find('input[name=adrId]').val(id);
  });


  $('.phone_yz').on('submit',function(){
    var area = $(this).find('input[name=cho_Area]').val();
    var insurer = $(this).find('input[name=cho_Insurer]').val();
    var phone = $(this).find('.phone').val();
    if(area != '请选择地区' && insurer != '请选择街道'){
      if((/^1[3|4|5|6|7|8|9][0-9]\d{4,8}$/.test(phone))){
        return true;
      }else{
        $(this).find('.phone').next('span').html('请输入正确的手机号');
      }
      
    }else{
      $(this).find('.phone').next('span').html('请选择地址');
    }
    return false;
  })
}) 
</script>

