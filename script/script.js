 $(document).ready(function() {
    $('#imageSet1').lightSlider({
        autoWidth:true,
        loop:true,
        pager:true,
        onSliderLoad: function() {
            $('#imageSet1').removeClass('cS-hidden');
        } 
    });  
  });

 $(document).ready(function() {
    $('#imageSet2').lightSlider({
        autoWidth:true,
        loop:true,
        pager:true,
        onSliderLoad: function() {
            $('#imageSet2').removeClass('cS-hidden');
        } 
    });  
  });