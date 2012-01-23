$(function() {
	$( "#slider" ).slider({ value: 27 });
	$( "#slider" ).slider({
		   change: function(event, ui) {
			   var left = $(this).find('.ui-slider-handle').css('left');
			   
			   left = left.replace('px','');
			   var left = left / 100;
			   
			   var newsize = 11 + left +'px';
			   
			   $('.text').css('font-size', newsize);
		   }
		});
	
	$( "#accordion" ).accordion( { 
		autoHeight:false,
		animated:'bounceslide'
	});
	$("a.flickrphoto").colorbox();
	$("a[rel='group1']").colorbox({rel:'group1'});
	
	$("a.video_popup").colorbox({ 
		iframe:true, 
		innerWidth:700, 
		innerHeight:394,
	});
	$("a.audio_popup").colorbox({ 
		iframe:true, 
		innerWidth:700, 
		innerHeight:80,
	});
	
	// jcycler
	$('#slideshow').cycle({
		  fx: 'fade',
		  speed: 1000,
		  timeout: 6000,
		  pager: '#slideshow_nav',
		  after: function() {
		  },
	 });
	 
	 $('.wide_media a.info').hide(); 
	 $('.wide_media a.info').css('opacity','0.8'); 
	 
	$(function(){  
	  $('.wide_media li').showFeatureText();    
	})
	
	// menu shake
	$("#nav li a.shake:not('.active')").click(function () {
		  $(this).effect("shake", { times:3, distance:5 }, 80);
	});
	
	// photo filters + hover effect
	$("#photographs .black").css('opacity','0.2');
	
	$("#photographs a").hover(function () {
		$(this).find('.black').css('display','block');
	},
	function() {
		$(this).find('.black').css('display','none');
	});
	
	$("#photographs a").hoverIntent(function () {
		$(this).append('<div class="caption">' + $(this).attr('alt') + '</div>');
		
	},
	function() {
		$('.caption', this).remove();
	});
	
	$("#photographs .caption").hover(function () {
		$('.caption', this).remove();
	});
	
	$("#filter a").click(function () {
		 $("#filter a").removeClass();
		 var cat =  $(this).attr('ref');

		 if (cat == 'all') {
			$("#photographs img").fadeTo('slow', '1');
		 } else {
			$("#photographs a." + cat + "' img").fadeTo('slow', '1');
			$("#photographs a:not('." + cat + "') img").fadeTo('slow', '0.1');
		 }
		 $(this).addClass('active');
	});
	
});


