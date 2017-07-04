<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/wxj2.css"/>
    <script src="/js/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="/css/weui.css"/>
    <link rel="stylesheet" href="/css/weui2.css"/>
    <link rel="stylesheet" href="/css/weui3.css"/>
    @yield('css-link')
</head>
<style type="text/css">

</style>
@yield('css')
<body>
{{--<提示组件--}}
<div class="toptips"><span></span></div>
{{--加载组件--}}
@extends('compoent.loading')
<!--content-->
@yield('content')
</body>
@yield('js')
{{--<script type="text/javascript">--}}
    {{----}}
{{--</script>--}}
</html>
