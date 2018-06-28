<div class="bss-slides num1" tabindex="1" autofocus="autofocus">
	<?php 
	$slides = array( 
		'slide-2.jpg' => T('agent_2'),
		'slide-1.jpg' => T('agent_1'),
		'slide-3.jpg' => T('agent_3'),
	);
	foreach ($slides as $url => $text) { ?>	
		<figure style="background-image:url('<?php echo BASE_URL . UPLOADS_FOLDER;?>slides/<?php echo $url;?>')" />
			<figcaption>
				<div class="wrap">
					<h1><?php echo T('youragent');?></h1>
					<p class="subtext"><?php echo $text;?></p>
					<a href="<?php echo G('path');?>ru/contacts" class="btn"><?php echo T('request');?></a>
				</div>
			</figcaption> 
		</figure>
	<? } ?>	
</div>

<script>
var opts = {
	auto : {
		speed : 3500, 
		pauseOnHover : true
	},
	fullScreen : true,
	swipe : false
};
makeBSS('.num1', opts);
</script>
			
<div class="whiteline">			
	<div class="table wrapper wrap">
		<div class="td">
			<a href="<?php echo (getLang() == 'ru' ? G('path') . getLang() . '/switch-and-save' : '#')?>">
				<i class="fa-money-bill-alt far"></i>
				<p><?php echo T('switch-and-save');?></p>
			</a>
		</div>
		
		<div class="td">
			<a href="<?php echo  (getLang() == 'ru' ? G('path') . getLang() . '/new-in-switzerland' : '#')?>">
				<i class="fa-plane fas"></i>
				<p><?php echo T('new-in-switzerland');?></p>
			</a>
		</div>

		<div class="td">
			<a href="<?php echo  (getLang() == 'ru' ? G('path') . getLang() . '/welcome-baby' : '#')?>">
				<i class="fa-heart fas"></i>
				<p><?php echo T('welcome-baby');?></p>
			</a>
		</div>
		
	</div>
</div>
<div class="services">
	<?php echo getpage(getLang() . '/services'); ?>
</div>