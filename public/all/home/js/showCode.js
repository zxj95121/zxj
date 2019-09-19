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

/*留言处理*/
function leaveMessage() {
    var name = $('#name').val();
    var qq = $('#qq').val();
    var tel = $('#tel').val();
    var message = $('#message').val();

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/zxj/leavePost',
        data: {
            name: name,
            qq: qq,
            tel: tel,
            message: message
        },
        success: function(data) {
            if (data.errcode == '0') {
                $('#name').val('');
                $('#qq').val('');
                $('#tel').val('');
                $('#message').val('');
                swal({   
                    title: "留言成功!",   
                    text: "2秒后弹框自动关闭.",   
                    timer: 2000,   
                    showConfirmButton: true 
                });
            } else if (data.errcode == '1000') {
                 swal("留言太快", "一分钟最多留言一次", "error"); 
            }
        }
    })
    return false;
}