// var navigation
var menublock = jQuery('#menu-block');
var navicon = jQuery('#nav-icon');
var navclasmenu = jQuery('.nav-icon')
var dropdwown = jQuery(".dropdown-container");
var blockmain = jQuery(".block-main");
var menuline = jQuery(".menu-line, .menu-line1, .menu-line2");

// full block menu
navicon.on("click", function (e) {
    menublock.toggle('slide', {
        direction: 'right'
    }, 'fast');
    jQuery(this).toggleClass('open');
    blockmain.fadeToggle(300);
    menuline.toggleClass('black');
});

// block-main close block menu
blockmain.on("click", function (e) {
    jQuery(this).fadeToggle(300);
    menublock.toggle('slide', {
        direction: 'right'
    }, 'fast');
    navicon.toggleClass('open');
    menuline.toggleClass('black');
});

// clasic menu mobile
navclasmenu.on("click", function (e) {
    menumobile.slideToggle('fast');
});

//dropdown
jQuery('.dropdown').each(function () {
    var $dropdown = $(this);
    jQuery("a.dropdown-link.bal-exp", $dropdown).on('click', function (e) {
        e.preventDefault();
        var $divspan = jQuery("a.dropdown-link.bal-exp", $dropdown);
        $(this).children('.pls, .min').toggle();
        var $div = jQuery(".dropdown-container", $dropdown);
        $div.slideToggle('fast');
        return false;
    });
    $('html').on("click", function (e) {
        jQuery('.dropdown-container').slideUp('fast');
        jQuery('.pls').show();
        jQuery('.min').hide();
    });
});

$(".balwrap-menu-child").mCustomScrollbar({
    theme: "dark",
    mouseWheelPixels: 80,
    scrollInertia: 0
});
//End of Navigation