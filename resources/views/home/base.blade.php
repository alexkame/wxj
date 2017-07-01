<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/wxj.css"/>
    <link rel="stylesheet" href="/css/weui.css"/>
    <link rel="stylesheet" href="/css/weui2.css"/>
    <link rel="stylesheet" href="/css/weui3.css"/>
    <script src="/js/jquery-1.11.2.min.js"></script>
    @yield('css-link')
</head>
<style type="text/css">
    a:active {
        background: black;
    }
</style>
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
    <a id="a-home" class="subMenu text-center" href="/at/m/">
        <img id="home-img" class="menu_img" src="/images/wine.png"/>
        <div class="menu_name">美酒专区</div>
    </a>
    <a id="a-basket" class="subMenu text-center" href="/at/m/basket">
        <img id="basket-img" class="menu_img" src="/images/basket.png"/>
        <div class="menu_name">购物篮</div>
    </a>
    <a id="a-boko" class="subMenu text-center" href="/at/m/boko">
        <img id="boko-img" class="menu_img" src="/images/boko.png"/>
        <div class="menu_name">账簿</div>
    </a>
    <a id="a-me" class="subMenu text-center" href="/at/m/me">
        <img id="me-img" class="menu_img" src="/images/me.png"/>
        <div class="menu_name">我的</div>
    </a>
</div>
</body>
@yield('js')
<script type="text/javascript">
    /*content高度*/
    function initSize() {
        var height = $(window).height() - $("header").height() - $("#description").height() - $("#menu").height();
        $("#content").height(height + "px");
    }
</script>
</html>
