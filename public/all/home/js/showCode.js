$('.contactUl li').each(function(e){

	$(this).mouseover(function(e){
		$(this).parents('ul').find('.code').hide();
		$(this).find('.code').show();
	});

	$(this).mouseout(function(e){
		$(this).parents('ul').find('.code').hide();
	});

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
