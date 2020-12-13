$(document).ready(function() {
    $('#imageSet1').lightSlider({
        autoWidth:true,
        loop:false,
        pager:true,
        onSliderLoad: function() {
            $('#imageSet1').removeClass('cS-hidden');
        } 
    });  
  });

 $(document).ready(function() {
    $('#imageSet2').lightSlider({
        autoWidth:true,
        loop:false,
        pager:true,
        onSliderLoad: function() {
            $('#imageSet2').removeClass('cS-hidden');
        } 
    });  
  });


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
}