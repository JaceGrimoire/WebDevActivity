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