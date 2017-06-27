<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/wxj.css"/>
    {{--<link rel="stylesheet" href="/style/weui.css"/>--}}
    {{--<link rel="stylesheet" href="/style/weui2.css"/>--}}
    {{--<link rel="stylesheet" href="/style/weui3.css"/>--}}
</head>
@yield('css')
<body onload="initSize()" onresize="initSize()">
{{--<提示组件--}}
<div class="toptips"><span></span></div>
{{--加载组件--}}
@extends('compoent.loading')
@yield('content')
</body>

@yield('js')
<script src="/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    /*content高度*/
    function initSize() {
        var height = $(window).height() - $("header").height() - $("#description").height() - $("#menu").height();
        $("#content").height(height + "px");
    }

//    $(document).ready(function () {
//        //添加图片
//        $("div .subMenu>img").each(function () {
//            var name = $(this).attr("data-imgname");
//            var src = "/images/" + name + ".png"
//            //设置img的属性和值。
//            $(this).attr("src", src);
//        });
//        //点击事件
//        $("div .subMenu").click(function () {
//            // 取消当前激活状态
//            var $img = $(".active>img");
//            //返回被选元素的属性值
//            var name = $img.attr("data-imgname");
//            var src = "/images/" + name + ".png";
//            $img.attr("src", src);
//            $(".active").removeClass("active");
//
//            // 添加新状态
//            $(this).addClass("active");
//            //找到所有 div(subMenu) 的子元素(img)
//            $img = $(this).children("img");
//            name = $img.attr("data-imgname");
//            src = "/images/" + name + "_active.png";
//            //设置img的属性和值。
//            $img.attr("src", src);
//
//            //content根据点击按钮加载不同的html
//            var page = $(this).attr("data-src");
//            if(page){
//                $("#content").load("../html/" + page)
//            }
//        });
//        // 自动点击第一个菜单
//        $("div .subMenu")[0].click();
//    });
</script>
</html>
