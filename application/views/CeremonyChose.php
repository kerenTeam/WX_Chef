<body class="bwhite">
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform bheader">
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/ceremony')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  主题一
  </h1>
  
</header>
<div class="contactCus">
  <img src="skin/img/contactBg.png">
</div>
  <a class="contactGo" href="<?php echo site_url('home/customServ')?>">
    晕了吗？<br>联系客服
  </a>
<form action="" method="" enctype="multipart/form-data">
  <div class="am-g area">
    <div class="am-u-sm-3"><strong>迎宾区</strong></div>
    <div class="am-u-sm-9">
      <div class="am-cf gsf">
        <div class="am-fl">1、迎宾喷绘/<small>平米</small><span class="price red am-icon-cny">1000</span></div>
        <div class="am-fr">
        <!-- 默认数量单位 -->
          <input type="hidden" class="unit" value="1">
          <!-- 数量加减 -->
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">2、签到背景/<small>平米</small><span class="price red am-icon-cny">1000</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">3、签到台/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">4、鲜花/<small>组</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">5、拱门/<small>个</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="am-g area">
    <div class="am-u-sm-3"><strong>仪式区</strong></div>
    <div class="am-u-sm-9">
      <div class="am-cf gsf">
        <div class="am-fl">1、舞台/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">2、LED屏/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">3、干冰机/<small>台</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">4、泡泡机/<small>台</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">5、拱门/<small>个</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="am-g area">
    <div class="am-u-sm-3"><strong>宴会区</strong></div>
    <div class="am-u-sm-9">
      <div class="am-cf gsf">
        <div class="am-fl">1、迎宾喷绘/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">2、签到背景/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">3、签到台/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">4、鲜花/<small>组</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">5、拱门/<small>个</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="am-g area">
    <div class="am-u-sm-3"><strong>局部装饰</strong></div>
    <div class="am-u-sm-9">
      <div class="am-cf gsf">
        <div class="am-fl">1、迎宾喷绘/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">2、签到背景/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">3、签到台/<small>平米</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">4、鲜花/<small>组</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
      <div class="am-cf gsf">
        <div class="am-fl">5、拱门/<small>个</small><span class="price red am-icon-cny">10</span></div>
        <div class="am-fr">
          <input type="hidden" class="unit" value="1">
          <div class="CmNum">
            <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
            <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
            <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id=""> 
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney">总价</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="button" class="am-btn am-btn-success makeCheck">确认</button>
        
      </div> 
  </div>
  <div class="tk" style="display: none;">
         <div class="tkcontent tkvip bwhite" style="background: white;border-radius: 5px;">
           <div class="tktxt2">

              <div class="am-text-center am-text-lg am-margin-sm">订单确认</div>
              <!-- <hr data-am-widget="divider" style="margin:0;" class="am-divider am-divider-default" /> -->
              <div class="am-text-center am-margin am-text-sm">
              线下支付该订单，确认提交订单？
              </div>
              </div>

          <button type='button' class="am-u-sm-6 bno gray closem">取消</button>

          <button type='submit' id="sub" class="am-u-sm-6 bno green">提交</button>
          </div>
     </div>
</form>

</body>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/num_unit.js"></script>
<script> 

 $(function(){
 
var inputs = $('.numTxt');
inputs.each(function() {
var numI=$(this).val();
if(numI == 0){
$(this).css('display','none');
$(this).parent('.CmNum').find('.reduce').css('display','none');
}
else{
$(this).css('display','inline-block');
$(this).parent('.CmNum').find('.reduce').css('display','inline-block');
}
});
$('.makeCheck').click(function(){
 $('.tk').fadeIn(400);
});
 $('.closem').click(function() {  
          $('.tk').fadeOut(400); 
        });
});

</script>
</html>