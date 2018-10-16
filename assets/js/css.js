$(document).ready(function() {
    $(".button-collapse").sideNav();
})

$(document).ready(function() {
    $('.slider').slider();
});

$(document).ready(function() {
    $('.parallax').parallax();
});
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  $(document).ready(function(){
     $('.tooltipped').tooltip({delay: 50});
   });

   $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
    $(document).ready(function() {
  $(‘#audio-player’).mediaelementplayer({
  alwaysShowControls: true,
  features: [‘playpause’,’volume’,’progress’],
  audioVolume: ‘horizontal’,
  audioWidth: 364,
  audioHeight: 70
  });
  });
