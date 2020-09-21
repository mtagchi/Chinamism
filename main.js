// jQuery(document).ready(function(){
//     var docWidth = jQuery('body').width(),
//         $wrap = jQuery('#wrap'),
//         $images = jQuery('#wrap .hb'),
//         slidesWidth = $wrap.width();
    
//     jQuery(window).on('resize', function(){
//       docWidth = jQuery('body').width();
//       slidesWidth = $wrap.width();
//     })
    
//     jQuery(document).mousemove(function(e) {
//       var mouseX = e.pageX,
//           offset = mouseX / docWidth * slidesWidth - mouseX / 2;
      
//       $images.css({
//         '-webkit-transform': 'translate3d(' + -offset + 'px,0,0)',
//                 'transform': 'translate3d(' + -offset + 'px,0,0)'
//       });
//     });
//   })