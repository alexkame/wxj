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
    @yield('css-link')
</head>
@yield('css')
<body onload="initSize()" onresize="initSize()">
{{--<提示组件--}}
<div class="toptips"><span></span></div>
{{--加载组件--}}
@extends('compoent.loading')
<!--content-->
@yield('content')
<!--bottom-->
<div id="menu" class="menu">
    <a id="a_home" class="subMenu text-center" href="/at/app/">
        <img id="home_img" class="menu_img" src="/images/home.png"/>
        <div class="menu_name">首页</div>
    </a>
    <a id="a_basket" class="subMenu text-center" href="/at/app/basket">
        <img id="basket_img" class="menu_img" src="/images/basket.png"/>
        <div class="menu_name">购物篮</div>
    </a>
    <a id="a_me" class="subMenu text-center" href="/at/app/me">
        <img id="me_img" class="menu_img" src="/images/me.png"/>
        <div class="menu_name">个人中心</div>
    </a>
</div>
</body>

<script src="/js/jquery-1.11.2.min.js"></script>
@yield('js')
<script type="text/javascript">
    /*content高度*/
    function initSize() {
        var height = $(window).height() - $("header").height() - $("#description").height() - $("#menu").height();
        $("#content").height(height + "px");
    }
</script>
</html>
