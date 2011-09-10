/*
 * Main javascript file of Webpoint theme
 */

 $(function(){
   $('.menu').supersubs({
            minWidth:    15,   // minimum width of sub-menus in em units
            maxWidth:    40    // extra width can ensure lines don't sometimes turn over
                               // due to slight rounding differences and font-family
        }).superfish({
            delay:       100,                            // one second delay on mouseout
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
            speed:       'fast'
        });
 });
