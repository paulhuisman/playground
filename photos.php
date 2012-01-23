<?php include 'inc/header.php'; ?>
<body class="photos">

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
		
			<div id="content" class="photos">
				<?php
				$phpFlickrObj = new phpFlickr('9d00e0003329e7b7c119a55d7ec2534a'); 
				
				$phpFlickrObj->enableCache("fs", "/var/www/psdskills/cache");
				$user = $phpFlickrObj->people_findByUsername('Paul Huisman');
				$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
				// $photos = $phpFlickrObj->people_getPublicPhotos($user['id'], NULL, NULL, 66);
				?>
				
				<?php $flickrsets = $phpFlickrObj->photosets_getList($user['id']); ?>
				
				<div id="filter">
					<span class="filter_intro">Pick your category:</span>
					<a href="#" ref="all" class="active">All</a>
					<?php 
					foreach ($flickrsets['photoset'] as $key => $set) {
						print '<a href="#" ref="'.$set['id'].'">'.$set['title'].'</a>';
						$photoset[$set['id']] = $phpFlickrObj->photosets_getPhotos($set['id']);
					}
					
					?>
				</div>
				
				<div id="photographs">
					<?php
					foreach ($photoset as $setkey => $setdata) {
						foreach ($setdata['photoset']['photo'] as $photo) {
							echo "<a class='".$setkey." flickrphoto' rel='".$setkey."' href=\"" . $phpFlickrObj->buildPhotoURL($photo, "Large") .  "\" alt='".$photo[title]."'>";  
						 	   echo "<span class='black'></span><img rel='".$setkey."' src=\"" . $phpFlickrObj->buildPhotoURL($photo, "Square") .  "\"  width=\"75\" height=\"75\" alt='".$photo[title]."' />";  
						    echo "</a>";  
						}
					}
					?>
				</div>
			
			</div>
			
			
		</div>
		
	</div>
  
</body>
</html>
