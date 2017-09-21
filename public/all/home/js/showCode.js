$('.contactUl li').each(function(e){

	if (!IsPC()) {

		$(this)[0].addEventListener('touchstart',touch,false);

    	$(this)[0].addEventListener('touchmove',touch,false);

    	$(this)[0].addEventListener('touchend',touch,false);
		// $(document).on('touchstart', this, function(e){
		// 	$(this).parents('ul').find('.code').hide();
		// 	$(this).find('.code').show();
		// });

		// $(document).on('touchend', this, function(e){
		// 	$(this).parents('ul').find('.code').hide();
		// });

	} else {

		$(this).mouseover(function(e){
			$(this).parents('ul').find('.code').hide();
			$(this).find('.code').show();
		});

		$(this).mouseout(function(e){
			$(this).parents('ul').find('.code').hide();
		});

	}

	// $(document).click(function(){
	// 	$('.code').hide();
	// })
})

function touch(event) {
	var event = event || window.event;
	var target = '#'+event.target.id;
	switch(event.type){

        case "touchstart":

        	$('.code').hide();
        	// alert($(target).html());
        	$(target).find('.code').show();

        break;

        case "touchend":

            $('.code').hide();

        break;

        case "touchmove":

        	       

        break;
    }
}

function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
