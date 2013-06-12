// $('.leftColumn').addClass('border');
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
// you don't get an error constaintly looking for the variable 'top'. When logging the 'url' 
 if(document.URL.indexOf("shop") >= 0){
        $(function sideBar() {

            var $shoppingMenu   = $('.shoppingMenu'), // Creating a shorthand way of saying $('shoppingMenu')
                $window    = $(window), // Defines the $(window) object to be called $window.
                offset     = $shoppingMenu.offset(), // setting variable offset to be equal to the top most pixel of class shoppingMenu. The .offset method is called when this script is run, making 
                topPadding = 200; // Top padding is set to 200. 
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

//The image changing script goodness!

$('.thumbs img').click(function() { //Selects the .thumbs class, specifically the images.
    var thmb = this; //Gets the image tag for whatever the user clicked on
    var src = this.src; // Takes the variable 'thmb' and strips out only the src attibute
    $('.bigImage img').fadeOut(0,function(){ // Targets the .bigImage class, specifically the image in there. It fades the current image in .bigImage in 0 ms, then runs a function.
        thmb.src = this.src; // thmb.src was defined earlier in the equation to mean the source of the thumbnail you clicked on. This is setting the source of the thumbnail to be the source of the bigImage image.
        $(this).fadeIn(0)[0].src = src; // src was defined earlier in the function to mean the source of the thumbnail the user clicked. This is the statement that sets the .bigImage to be the picture of the thumbnail.
    });
});




//The navigation menu
$(function() {
    var path = location.pathname; //Sets the variable 'path' to the current URL address from the location object.
    console.log('Path: ' + path);
    var pathArray = path.split('/'); // Splits the array at the /'s, returning (for example) Peggys%20Everything, process.php.
    console.log('pathArray: ' + pathArray);
    for (var i = 0; i < pathArray.length; i++) { //A for loop that loops over the values of pathArray. If any value of the array pathArray is 
        $("a[href*='"+pathArray[i]+"']").addClass("selected"); // Any link that contains any index in he pathArray will have the class of 'selected' added to it.
    };
});

