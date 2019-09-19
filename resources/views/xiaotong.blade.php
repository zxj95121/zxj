<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>我家小桐</title>
</head>

<style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
    }

    #container {
        width: 800px;
        height: 500px;
        background: #FFF;
        margin: 0px auto;
        margin-top: 100px;
    }

    #b1 {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background-color: #FFCCCC;
        border-radius: 100%;
        position: fixed;
    }

    #b2 {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background-color: #FFCCCC;
        border-radius: 100%;
        position: fixed;
    }

    #b3 {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background-color: #FFCCCC;
        border-radius: 100%;
        position: fixed;
    }

    #b4 {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background-color: #FFCCCC;
        border-radius: 100%;
        position: fixed;
    }
</style>

<script src="/all/home/js/jquery.min.js"></script>
<script type="text/javascript">
    //调用移动浮窗方法并按顺序传入正确参数["obj",x,y,l,t,m],obj必填
    /*
       move_w：能够移动的宽度
       move_h：能够移动的高度
       x：左右移动速度
       y:上下移动速度
       l：初始left的值
       t:初始top的值
       m：时间
       
    */
    function move_obj(obj, x, y, l, t, m) {
        if (obj == undefined) {
            alert("方法调用错误,请传入正确参数!");
            return;
        }

        //当前浏览器窗口大小
        move_w = $(window).width();
        move_h = $(window).height();


        //若浏览器窗口大小改变
        $(window).resize(function() {
            move_w = $(window).width();
            move_h = $(window).height();
        });

        //移动的速度和初始位置
        x = (x == undefined || x == '') ? 3 : x;
        y = (y == undefined || y == '') ? 3 : y;
        l = (l == undefined || l == '') ? 0 : l;
        t = (t == undefined || t == '') ? 0 : t;
        m = (m == undefined || m == '') ? 80 : m;

        //移动
        function moving() {

            if (l >= move_w - $(obj).width() || l < 0) { //如果碰到浏览器左右壁
                x = -x;
            }

            if (t >= move_h - $(obj).height() || t < 0) { //如果碰到浏览器上下壁
                y = -y;
            }

            l += x;
            t += y;

            $(obj).css({ //改变div的位置
                left: l,
                top: t
            });
        }

        var timer_move = setInterval(function() {
                moving();
            },
            m);

        $(obj).mouseover(function() {
            clearInterval(timer_move);
        });

        $(obj).mouseout(function() {
            timer_move = setInterval(function() {
                    moving();
                },
                m);
        });

    }

    move_obj("#b1", 30, 10, 300, 300, 100);

    setTimeout(function() {
        move_obj("#b2", 30, 10, 300, 300, 100);
    }, 200);
    setTimeout(function() {
        move_obj("#b3", 30, 10, 300, 300, 100);
    }, 400);
    setTimeout(function() {
        move_obj("#b4", 30, 10, 300, 300, 100);
    }, 600);
    // move_obj("#b3",30,10,300,300,100);
    // move_obj("#b4",30,10,300,300,100);
    // move_obj("#b2");
    // move_obj("#b3",-20,30,600,500,50);
    // move_obj("#b4",-20,30,600,500,50);
</script>


<body bgcolor="#FFFFFF">

    <div id="b1">我</div>
    <div id="b2">家</div>
    <div id="b3">小</div>
    <div id="b4">桐</div>

</body>

</html>