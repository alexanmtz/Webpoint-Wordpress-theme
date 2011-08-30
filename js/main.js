/*
 * Main javascript file of Webpoint theme
 */

 $(function(){
   $('.menu').superfish({
     onBeforeShow:  function(){
       var parentWidth = $(this).parents('.menu-bar li').outerWidth();
       $(this).css('width', parentWidth);
     }
   });
 });
