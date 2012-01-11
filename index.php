<?php include 'inc/header.php'; ?>
<body>

	<div id="wrapper">
		<div id="header">
			
			<div id="logo">Paul's CSS Playground</div>
			
			<div id="nav">
				<ul>
					<li><a href="#" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="photos.php">Portfolio</a></li>
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
			
			<div id="content">
				<div class="text">
					<div id="slideshow">
						<img src="img/slide1.jpg" title="Buddha" class="wide">
						<img src="img/slide2.jpg" title="Family" class="wide">
						<img src="img/slide3.jpg" title="Volkswagen" class="wide">
					</div>
					
					<div id="slideshow_nav"></div>
					
					Donec varius nulla id magna blandit aliquam. Cras sollicitudin imperdiet risus, ut ultricies nibh dapibus sit amet. Curabitur tempus purus ut est tincidunt sodales. Pellentesque rutrum, urna sit amet adipiscing malesuada, urna felis interdum nunc, nec pellentesque velit arcu ut leo. Morbi aliquam mi vitae turpis imperdiet in consequat ante tristique. Sed eu felis justo, in euismod lectus. Sed sed tellus est. Vestibulum elementum dapibus quam, sit amet tincidunt lacus molestie ut. Phasellus eget mi urna, id dictum nisl. Vivamus vehicula faucibus rhoncus. Cras ornare pellentesque augue feugiat rhoncus. Phasellus porta suscipit lectus quis fermentum. Nam ac nulla libero, eget venenatis eros.
				
					<h2>Donec tempor tristique odio !?</h2>
					<img src="http://images.travelpod.com/users/paulhuisman/thumbnail.uimg.paulbw2.jpg" class="side" title="Paul 2011"> 
					Duis in mauris sem. Pellentesque habitant <a href="#">morbi tristique</a> senectus et netus et malesuada fames ac turpis egestas. Nam at nisi est. Proin placerat eros eu libero dapibus facilisis. Ut eleifend nibh in urna sollicitudin ut placerat quam pulvinar. Morbi eget ante purus, vel tincidunt libero. Praesent placerat lobortis felis. Donec ultricies vehicula vulputate. Quisque ac turpis eget diam dignissim gravida. Nunc auctor tellus mi, eu consectetur quam. Phasellus et orci dui, et tincidunt dolor. Sed pulvinar arcu ac felis ultrices vel lacinia ante ultrices. Maecenas congue, leo eget posuere vestibulum, urna risus viverra ligula, sit amet aliquam nunc nisi et mauris. Nullam tristique feugiat tempor. Nunc consequat lectus a nisi vestibulum vitae mattis risus gravida. Etiam eu ligula in eros posuere fermentum. 
				</div>
			</div>
			
			<div id="sidebar">
				
				
				<div class="shadow">
					<div id="accordion">
						
						<h3 class="first"><span class="icon photos">Photos</span><a href="#">Photos</a><span class="right" title="79 Photos">79</span></h3>
						<div class="photos">
							<a href="http://farm7.staticflickr.com/6188/6158866655_40d935e398.jpg" rel="group1" title="Demolishers">
								<img src="http://farm7.staticflickr.com/6188/6158866655_40d935e398_s.jpg">
							</a>
							<a href="http://farm6.staticflickr.com/5096/5397016737_a190f02f8e.jpg" rel="group1" title="Beach">
								<img src="http://farm6.staticflickr.com/5096/5397016737_a190f02f8e_s.jpg" rel="group1">
							</a>
							<a href="http://farm6.staticflickr.com/5052/5389520400_a5ac5fc9ae.jpg" rel="group1" title="Rocks">
								<img src="http://farm6.staticflickr.com/5052/5389520400_a5ac5fc9ae_s.jpg" rel="group1" class="third">
							</a>
							<a href="http://farm6.staticflickr.com/5089/5377675414_0369483124.jpg" rel="group1" title="Cuckatoo">
								<img src="http://farm6.staticflickr.com/5089/5377675414_0369483124_s.jpg" rel="group1">
							</a>
							<a href="http://farm6.staticflickr.com/5011/5544278543_d697c430f5.jpg" rel="group1" title="New Zealand">
								<img src="http://farm6.staticflickr.com/5011/5544278543_d697c430f5_s.jpg" rel="group1">
							</a>
							<a href="http://farm6.staticflickr.com/5185/5678852946_bafff553c2.jpg" rel="group1" title="Volkswagen">
								<img src="http://farm6.staticflickr.com/5185/5678852946_bafff553c2_s.jpg" rel="group1" class="third">
							</a>
							<a href="http://farm7.staticflickr.com/6162/6159006895_8d72d35c85.jpg" rel="group1" title="Ghetto">
								<img src="http://farm7.staticflickr.com/6162/6159006895_8d72d35c85_s.jpg" rel="group1" class="">
							</a>
							<a href="http://farm6.staticflickr.com/5218/5395782016_750bdcf96e.jpg" rel="group1" title="HDR">
								<img src="http://farm6.staticflickr.com/5218/5395782016_750bdcf96e_s.jpg" rel="group1" class="">
							</a>
							<a href="http://farm6.staticflickr.com/5008/5377669114_686e696d81.jpg" rel="group1" title="Perth">
								<img src="http://farm6.staticflickr.com/5008/5377669114_686e696d81_s.jpg" rel="group1" class="third">
							</a>
						</div>
						
						<h3><span class="icon videos">Videos</span><a href="#">Videos</a><span class="right" title="92 Videos">92</span></h3>
						<div class="nospacing wide_media">
							<ul>
								<li>
									<a href="http://www.youtube.com/embed/g9__-tRjFS8?autoplay=1" class="info video_popup">Travis Rice <span class="play"></span></a>
									<a href="http://www.youtube.com/embed/g9__-tRjFS8?autoplay=1" class="link video_popup"><img src="img/video1.jpg" /></a>
									
								</li>
								<li>
									<a href="http://player.vimeo.com/video/22439234?autoplay=1" class="info video_popup">Surfing Indonesia <span class="play"></span></a>
									<a href="http://player.vimeo.com/video/22439234?autoplay=1" class="link video_popup"><img src="img/video2.jpg"/></a>
								</li>
								<li>
									<a href="http://www.youtube.com/embed/1Fshnu_SwAg?autoplay=1" class="info video_popup">BBC Frozen Planet <span class="play"></span></a>
									<a href="http://www.youtube.com/embed/1Fshnu_SwAg?autoplay=1" class="link video_popup"><img src="img/video4.jpg" /></a>
								</li>
								
								<li class="last">
									<a href="http://www.youtube.com/embed/ZuHAPIJ_EV8?autoplay=1" class="info video_popup">Mark Appleyard <span class="play"></span></a>
									<a href="http://www.youtube.com/embed/ZuHAPIJ_EV8?autoplay=1" class="link video_popup"><img src="img/video3.jpg"/></a>
								</li>
							</ul>
						</div>
						
						<h3><span class="icon audio">Audio files</span><a href="#">Tracks</a><span class="right" title="17 Tracks">17</span></h3>
						<div class="nospacing list">
							<ul>
								<li>
									<a href="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F4492646&show_comments=false" class="audio_popup">MGMT - Kids (Remix)</a>
								</li>
								<li class="last">
									<a href="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F10881693&show_comments=false" class="audio_popup">The Planty Herbs - Output</a>
								</li>
							</ul>
						</div>
						
						<h3><span class="icon photos">Panorama's</span><a href="#">Panorama's</a><span class="right" title="79 Photos">79</span></h3>
						<div class="nospacing wide_media">
							<ul>
								<li>
									<a href="img/pano1.jpg" rel="group2" title="Australia"><img src="img/pano1.jpg"></a>
								</li>
								<li>
									<a href="img/pano2.jpg" rel="group2" title="Australia"><img src="img/pano2.jpg"></a>
								</li>
								<li class="last">
									<a href="img/pano3.jpg" rel="group2" title="Australia"><img src="img/pano3.jpg"></a>
								</li>
							</ul>
						</div>
						
						<h3 class="last"><span class="icon settings">Settings</span><a href="#">Settings</a></h3>
						<div class="nospacing list last">
							<ul>
								<li><a href="#">John</a></li>
								<li class="last"><a href="#">Mark</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
  
</body>
</html>
