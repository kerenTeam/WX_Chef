
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
                  <li><a href="<?=site_url('usercenter/userInfo');?>" class="active">个人信息</a></li>
                  <li><a href="<?=site_url('usercenter/address');?>">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr bgc">
              
              <!--  个人信息 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">个人信息</li>
                    </ul> 
                  </div>
                  <div class="per-center"> 
        
                    <!-- 信息修改表单 -->
                     <form action="<?=site_url('usercenter/editusers');?>" method="post" class="am-form am-u-lg-9" data-am-validator enctype='multipart/form-data'>
                        <fieldset>

                          <div class="am-form-group">
                            <label for="doc-vld-ta-2">头像（<span>点击编辑头像</span>）：</label>
                            <style>
                               .wx_type_img{
                                  position: relative;
                                }
                                label{
                                  font-weight:400;
                                }
                                .wx_type_img input#imgUpload{
                                  margin: 0;
                                  cursor: pointer;
                                  position: absolute;
                                  top: 0;
                                  left: 0;
                                  height: 100%;
                                  opacity: 0;
                                  filter: alpha(opacity=0);
                                }
                                .am-checkbox-inline,.am-radio-inline{
                                  margin-top: 0;
                                }
                                #preview img{
                                  width: 100px;
                                  height: 100px;
                                }
                            </style>
                            <div class="wx_type_img">
                              <input type="file" id="imgUpload" name="UserImage" onchange="previewImage(this)" class="upload-add">
                              <!-- 图片实时预览 -->
                              <div id="preview"> <img style="border-radius: 3px;" src="<?=IP.$user[0]['userimage'];?>" alt="选择图片"> 
                               </div>
                            </div>
                          </div>

                          <div class="am-form-group">
                            <label for="doc-vld-name-2">* 昵称</label>
                            <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入用户名（至少 3 个字符）" value="<?=$user[0]['username'];?>" name='UserName' required/>
                          </div>  
                          <div class="am-form-group">
                            <label for="doc-vld-name-2">* 口味</label>
                            <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入用户名（至少 3 个字符）" value="<?=$user[0]['personaltaste'];?>" name='PersonalTaste' required/>
                          </div>
                          <div class="am-form-group">
                            <label class="am-form-label">菜品爱好：</label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="川菜" name="LikeCuisine[]" data-am-ucheck > 川菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="湘菜" name="LikeCuisine[]" data-am-ucheck> 湘菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="豫菜" name="LikeCuisine[]" data-am-ucheck> 豫菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="粤菜" name="LikeCuisine[]" data-am-ucheck> 粤菜
                            </label>
                            <label class="am-checkbox-inline am-checkbox">
                              <input type="checkbox" value="鲁菜" name="LikeCuisine[]" data-am-ucheck> 鲁菜
                            </label>
                          </div>

                          <input type="hidden" value="<?=$user[0]['userid'];?>" name='UserId' />
                          <button class="am-btn am-btn-secondary save" type="submit">提交</button>
                        </fieldset>
                      </form>
                  </div>
              </div> 
          </div>
      </div>
      </div>
  </div>

<script src="skin/js/imgup.js"></script>
<script src="skin/js/jquery.min.js"></script>
