'use strict';
var logic = false;

$(document).ready(function() {
    $(".fancybox-thumb").fancybox({
        prevEffect	: 'none',
        nextEffect	: 'none',
        helpers	: {
            title	: {
                type: 'outside'
            },
            thumbs	: {
                width	: 50,
                height	: 50
            }
        }
    });
    $(".various").fancybox({
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: true,
        closeEffect	: 'none'
    });
    $('#my-slide').DrSlider({
        width: true,
        height: 250,
        userCSS: false,
        transitionSpeed: 1000,
        duration: 4000,
        showNavigation: true,
        classNavigation: false,
        navigationColor: '#0b62bd',
        navigationHoverColor: '#d42a4c',
        navigationHighlightColor: '#d42a4c',
        navigationNumberColor: '#000000',
        positionNavigation: 'out-center-bottom',
        navigationType: 'circle',
        showControl: true,
        classButtonNext: undefined,
        classButtonPrevious: undefined,
        controlColor: '#FFFFFF',
        controlBackgroundColor: '#000000',
        positionControl: 'left-right',
        transition: 'slide-left',
        showProgress: true,
        progressColor: '#797979',
        pauseOnHover: true,
        onReady: undefined
    });
});


function howAndHideMenu() {
    logic = !logic;
    var screenWidth = window.innerWidth;
    if (screenWidth <= 480 && logic) {
        $('.showAndHideMenu').fadeIn('slow', function () {
            $(this).css('display:block');
        });
    } else {
        $('.showAndHideMenu').fadeOut('slow', function () {
            $(this).css('display:none');
        });
        return false;
    }
}