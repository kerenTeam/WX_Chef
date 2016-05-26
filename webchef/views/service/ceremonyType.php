
		<div class="center">
			<div class="elegance">
				<div class="am-g">
				<?php foreach($cere as $val):?>
					<div class="am-u-sm-6">
						<figure class="CmType am-shadow">
							<a href="<?=site_url('service/Ceremony?id=').$val['id'];?>">
								<img src="<?=IP.$val['logo'];?>">
								<figcaption><?=$val['name'];?><span class="red am-icon-cny fr">
								<?=$val['price'];?></span></figcaption>
							</a>
						</figure>
					</div>
				<?php endforeach;?>
					
				</div>
			</div>
		</div>
	</div>

	<script src="skin/js/jquery.min.js"></script>
