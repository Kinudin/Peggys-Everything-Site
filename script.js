/*
The hover state of the shop page 
*/
$(".item").hover( // Everything with the class name of 'item', when .hovered over
  function () {
    $(this).addClass('hover'); // Add the class 'hover', which lets the user know what their mouse is, well, hovering over.
  },
  function () {
    $(this).removeClass('hover'); // When the first action is no longer being met, remove the class of hover.
  }
);


var url = document.URL.indexOf('shop');

// The animation of the sidebar page. If the URL contains the string 'shop' anywhere in it
// you don't get an error constaintly looking for the variable 'top'.
 if(document.URL.indexOf("shop") >= 0){
        $(function sideBar() {

            var $shoppingMenu   = $('.shoppingMenu'), // Creating a shorthand way of saying $('shoppingMenu')
                $window    = $(window), // Defines variable $(window) to be called $window
                offset     = $shoppingMenu.offset(), // setting variable offset to be equal to the top most pixel of class shoppingMenu
                topPadding = 200; // Top padding is 
            $window.scroll(function() {
                if ($window.scrollTop() > offset.top) { // If the browser window top (when it reaches .shoppingMenu) is greater than the offset (in laymans terms, if the top of the  shoppingMenu starts to scroll out of the screen) run this.
                        $shoppingMenu.animate({
                            marginTop: $window.scrollTop() - offset.top + topPadding // scrollTop gets the vertical position of the scroller minus the offset of the original placement of .shoppingMenu PLUS the padding (200) which keeps .shoppingMenu in view at all times.
                        }, 0); //This is the speed of the animation. 0 means instantatious.
                    } else { // This else statement is first run when the page is loaded, and when the user scrolls above the point of the original shopping menu placement.
                        $shoppingMenu.animate({
                            marginTop: 150 // Sets the top Margin of the .shoppingMenu div to be 150px after scrolling up to its original position.
                        }, 0); // This is the speed fo the animation. 0 means instantanious.
                }
            }); 
        });
}