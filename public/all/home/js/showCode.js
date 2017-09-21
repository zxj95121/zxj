$('.contactUl li').each(function(e){
	// $(document).on(this, 'click', function(){
	// 	$(this).parents('ul').find('.code').hide();
	// 	$(this).find('.code').toggle();
	// 	e.stopPropagation();
	// });

	$(this).mouseover(function(e){
		$(this).parents('ul').find('.code').hide();
		$(this).find('.code').toggle();
	});

	$(this).mouseout(function(e){
		$(this).parents('ul').find('.code').hide();
	});

	if (!IsPC()) {
		$(document).on('touchstart', this, function(e){
			$(this).parents('ul').find('.code').hide();
			$(this).find('.code').toggle();
		});

		$(document).on('touchend', this, function(e){
			$(this).parents('ul').find('.code').hide();
		});
	}

	// $(document).click(function(){
	// 	$('.code').hide();
	// })
})

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
