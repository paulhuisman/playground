$.fn.showFeatureText = function() {
  return this.each(function(){    
    var box = $(this);
    var text = $('.info',this);    

    text.css({ position: 'absolute', bottom: '0px' }).hide();

    box.hoverIntent(function(){
      text.slideDown('300');
    },function(){
      text.slideUp('300');
    });

  });
}