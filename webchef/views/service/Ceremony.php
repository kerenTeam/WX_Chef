
		<div class="center bgc">
			<div class="elegance">
				<div class="am-g">
					<div class="am-u-sm-7">
						<img src="skin/img/cm1.png">
					</div>
					<div class="am-u-sm-5 cereForm">
						<form class="am-cf">
							<h2 class="am-cf">紫色梦幻<a href="<?=site_url('service/customServ');?>" title="" class="am-fr am-text-sm">晕了么？联系客服</a></h2>

							<div class="am-cf am-padding-sm qgray" id="my-sticky" data-am-sticky>
								<span class="red am-icon-cny am-text-xl" id="allmoney">34800.00</span>
								<button type="button" class="am-btn am-btn-danger am-fr makeCheck">确认</button>
								<div class="tk" style="display: none;">
									<div class="tkcontent tkvip bwhite am-cf" style="background: white;border-radius: 5px;">
										<div class="tktxt2">
											<div class="am-text-center am-text-lg am-margin-sm">订单确认</div>
											<!-- <hr data-am-widget="divider" style="margin:0;" class="am-divider am-divider-default" /> -->
											<div class="am-text-center am-margin am-text-sm">
												线下支付该订单，确认提交订单？
											</div>
										</div>
										<button type="button" class="am-u-sm-6 bno gray closem">取消</button>
										<button type="submit" id="sub" class="am-u-sm-6 bno green">提交</button>
									</div>
								</div>
							</div>
							<section data-am-widget="accordion" class="am-accordion am-accordion-gapped am-margin-0" data-am-accordion='{  }'>
								<dl class="am-accordion-item am-active">
									<dt class="am-accordion-title">
									套餐详情
									</dt>
									<dd class="am-accordion-bd am-collapse">
									<div class="am-accordion-content">
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>迎宾区</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、鲜花/<small>组</small><span class="price red am-icon-cny">60</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="10" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、迎宾喷绘/<small>平米</small><span class="price red am-icon-cny">30</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、签到背景/<small>平米</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、签到台/<small>米</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、拱门/<small>个</small><span class="price red am-icon-cny">100</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="4" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>仪式区</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、干冰机/<small>台</small><span class="price red am-icon-cny">60</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、鲜花/<small>组</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、舞台/<small>平米</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="10" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、摇臂/<small>台</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、泡泡机/<small>台</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">6、音响/<small>对</small><span class="price red am-icon-cny">90</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="5" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">7、香槟台/<small>个</small><span class="price red am-icon-cny">80</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">8、香槟塔/<small>个</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">9、路引/<small>对</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">10、T台/<small>米</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">11、烟花/<small>组</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="8" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">12、光束灯/<small>支</small><span class="price red am-icon-cny">100</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="20" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">13、LED屏幕/<small>平米</small><span class="price red am-icon-cny">300</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">14、仪式桌/<small>个</small><span class="price red am-icon-cny">100</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">15、花亭/<small>座</small><span class="price red am-icon-cny">100</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>宴会区</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、桌花/<small>组</small><span class="price red am-icon-cny">70</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="10" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、入场小花蓝/<small>套</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、交杯酒具/<small>套</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>局部装饰</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、伴郞胸花/<small>朵</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、新娘手捧花/<small>束</small><span class="price red am-icon-cny">60</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、双方服务胸花/<small>朵</small><span class="price red am-icon-cny">60</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、伴娘手腕花/<small>串</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、新郎胸花/<small>朵</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>灯光设备</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、追光灯/<small>支</small><span class="price red am-icon-cny">80</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="8" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、LEDPar灯/<small>对</small><span class="price red am-icon-cny">90</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="8" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、激光灯/<small>台</small><span class="price red am-icon-cny">90</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="5" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、专业灯控台/<small>台</small><span class="price red am-icon-cny">80</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、光束灯/<small>支</small><span class="price red am-icon-cny">80</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">6、摇光灯/<small>支</small><span class="price red am-icon-cny">50</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="10" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>专家团队</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、化妆师/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="6" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、方案执行企划/<small>名</small><span class="price red am-icon-cny">200</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、摄像师/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、现场督导/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="1" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、摄影师/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">6、主持人/<small>名</small><span class="price red am-icon-cny">1000</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="am-g area">
											<div class="am-u-sm-3"><strong>演艺人员</strong></div>
											<div class="am-u-sm-9">
												<div class="am-cf gsf">
													<div class="am-fl">1、萨克斯/<small>名</small><span class="price red am-icon-cny">400</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">2、吉他/<small>名</small><span class="price red am-icon-cny">500</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">3、竖笛/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">4、大提琴/<small>名</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">5、水鼓/<small>队</small><span class="price red am-icon-cny">600</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="3" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												<div class="am-cf gsf">
													<div class="am-fl">6、小提琴/<small>名</small><span class="price red am-icon-cny">80</span></div>
													<div class="am-fr">
														<!-- 默认数量单位 -->
														<input type="hidden" class="unit" value="1">
														<!-- 数量加减 -->
														<div class="CmNum">
															<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
															<input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2" style="display: inline-block;">
															<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									</dd>
								</dl>
							</section>
						</form>
					</div>
				</div>
				<div class="am-text-center ceremonyCtt">
					<h2>套餐描述</h2>
					<p>一个童话般的婚礼，希望能在浪漫、神圣、热烈、祥和的
						气氛中完成自己人生中最重要的时刻。于是帮助美丽公主
						完成她的愿望成了sunny喜铺策划师的工作重心。精致浪
						漫的城堡，童话般的婚礼殿堂……，当美丽的公主一步步
						驶向她幸福的宫殿，来到王子的面前时，当婚礼所有的光
						辉都撒在公主与王子的身上时，当来宾被婚礼仪式的神圣
						浪漫所感染时，所有的幸福与感动溢于言表。
						以紫色、白色为主调的花艺装饰与浪漫的童话城堡风格统
						一、色调协调，充分体现了浪漫典雅的婚礼主题风格。
						以紫色、白色为主调的花艺装饰与浪漫的童话城堡风格统
					一、色调协调，充分体现了浪漫典雅的婚礼主题风格。</p>
					<h2>1. 迎宾场地</h2>
					<img src="skin/img/cm1.png">
					<h2>2. 婚礼现场</h2>
					<img src="skin/img/cm2.png">
					<h2>3. 主持人员</h2>
					<img src="skin/img/cm3.png">
					<h2>4. 迎宾场地</h2>
					<img src="skin/img/cm4.png">
				</div>
			</div>
		</div>
	</div>

	<script src="skin/js/jquery.min.js"></script>
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
		// 	var flag = false;
	// $('.am-accordion-title').click(function(){
		// 	if(!flag){
			// 		$('#my-sticky').css('position','fixed');
			// 		flag = true;
		// 	}else{
			// 		$('#my-sticky').css('position','relative');
			// 		flag = false;
		// 	}
		// 	console.log(flag)
	// })
	});
	</script>
	