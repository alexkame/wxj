<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/wxj2.css"/>
    <link rel="stylesheet" href="/css/weui.css"/>
    <link rel="stylesheet" href="/css/weui2.css"/>
    <link rel="stylesheet" href="/css/weui3.css"/>
    <script src="/js/jquery-1.11.2.min.js"></script>
    @yield('css-link')
</head>
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
