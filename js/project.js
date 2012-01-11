$(function() {
	$( "#accordion" ).accordion( { 
		autoHeight:false,
		animated:'bounceslide'
	});
	$("a[rel='group1']").colorbox({rel:'group1'});
	$("a[rel='group2']").colorbox({rel:'group2'});
	$("a[rel='group3']").colorbox({rel:'group3'});
	
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
	$("#photographs .black").css('opacity','0.3');
	
	$("#photographs a").hover(function () {
		$(this).find('.black').css('display','block');
	},
	function() {
		$(this).find('.black').css('display','none');
	});
	$("#filter a").click(function () {
		 $("#filter a").removeClass();
		 var cat =  $(this).attr('ref');

		 if (cat == 'all') {
			$("#photographs img").fadeIn('slow');
		 } else {
			$("#photographs a." + cat + "' img").fadeIn('slow');
			$("#photographs a:not('." + cat + "') img").fadeOut('slow');
		 }
		 $(this).addClass('active');
	});
	
});
