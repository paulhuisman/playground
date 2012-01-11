<?php include 'inc/header.php'; ?>
<body>

	<div id="wrapper">
		<div id="header">
			
			<div id="logo">Paul's CSS Playground</div>
			
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php" >About</a></li>
					<li><a href="#" class="active">Portfolio</a></li>
					<li><a class="shake" href="#">Contact</a></li>
				</ul>
			</div>
			
			<div id="search">
				<input type="text" value="Zoeken" name="name" onblur="if (this.value == '') {this.value = 'Zoeken';}"  onfocus="if (this.value == 'Zoeken') {this.value = '';}" />
			</div>
			
			<div id="settings"></div>
			
		</div>
		
		<div id="content_wrapper">
		
			<!--<h1>Hey you!</h1>-->
			
			<div id="content" class="photos">
				<?php
				/*
				$phpFlickrObj = new phpFlickr('9d00e0003329e7b7c119a55d7ec2534a'); 
				$user = $phpFlickrObj->people_findByUsername('Paul Huisman');
				$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
				$photos = $phpFlickrObj->people_getPublicPhotos($user['id'], NULL, NULL, 12);
				?>
				
				<?php //$categories = array('travel','holland','urban'); ?>
				<?php $flickrsets = $phpFlickrObj->photosets_getList($user['id']); ?>
				<?php foreach ($flickrsets as $key => $flickrset) {
					//$categories[$key] = $flickrset['title'] ;
					//var_dump($flickrset);
				} 
				*/
				?>
				<div id="filter">
					<span class="filter_intro">Pick your category:</span>
					<?php foreach ($categories as $category): ?>
						<?php print $category; ?>
					<?php endforeach; ?>
					<a href="#" ref="all" class="active">All</a>
					<a href="#" ref="travel">Travel</a>
					<a href="#" ref="holland">Holland</a>
					<a href="#" ref="urban">Urban</a>
				</div>
				<div id="photographs">
					
					<?php $i = 1; while($i < 5): ?>
				
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm7.staticflickr.com/6188/6158866655_40d935e398.jpg" rel="group1" title="Demolishers">
							<span class="black"></span><img src="http://farm7.staticflickr.com/6188/6158866655_40d935e398_s.jpg" rel="group1">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5096/5397016737_a190f02f8e.jpg" rel="group2" title="Beach">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5096/5397016737_a190f02f8e_s.jpg" rel="group2">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5052/5389520400_a5ac5fc9ae.jpg" rel="group2" title="Rocks">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5052/5389520400_a5ac5fc9ae_s.jpg" rel="group2" class="third">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5089/5377675414_0369483124.jpg" rel="group1" title="Cuckatoo">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5089/5377675414_0369483124_s.jpg" rel="group1">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5011/5544278543_d697c430f5.jpg" rel="group1" title="New Zealand">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5011/5544278543_d697c430f5_s.jpg" rel="group1">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5185/5678852946_bafff553c2.jpg" rel="group2" title="Volkswagen">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5185/5678852946_bafff553c2_s.jpg" rel="group2" class="third">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm7.staticflickr.com/6182/6159482188_df5e1de1a2.jpg" rel="group3" title="Ghetto">
							<span class="black"></span><img src="http://farm7.staticflickr.com/6182/6159482188_df5e1de1a2_s.jpg" rel="group3" class="third">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm7.staticflickr.com/6162/6159006895_8d72d35c85.jpg" rel="group2" title="Ghetto">
							<span class="black"></span><img src="http://farm7.staticflickr.com/6162/6159006895_8d72d35c85_s.jpg" rel="group2" class="">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5218/5395782016_750bdcf96e.jpg" rel="group1" title="HDR">
							<img src="http://farm6.staticflickr.com/5218/5395782016_750bdcf96e_s.jpg" rel="group1" class="">
						</a>
						<a class="<?php print($categories[rand(0,2)]);  ?>" href="http://farm6.staticflickr.com/5008/5377669114_686e696d81.jpg" rel="group2" title="Perth">
							<span class="black"></span><img src="http://farm6.staticflickr.com/5008/5377669114_686e696d81_s.jpg" rel="group2" class="third">
						</a>
					<?php $i++; endwhile; ?>
				</div>
			
			</div>
			
			
		</div>
		
	</div>
  
</body>
</html>
