'use strict';
$(function(){
	$("#slider_reviews").carouFredSel({
        circular: true,
        infinite: true,
        auto: false,
        width: 420,
        prev: '.arrow_prev',
        next: '.arrow_next',
        items: {
            visible: 1
        },
        align: 'center', 
        scroll: {
         items : 1,
         duration : 800
        }
    });
});