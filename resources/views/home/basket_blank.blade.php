@extends('home.base2')
@section('title', "购物篮")
@section('css-link')
    <link rel="stylesheet" href="/css/weui.css"/>
    <link rel="stylesheet" href="/css/weui2.css"/>
    <link rel="stylesheet" href="/css/weui3.css"/>
    @endsection
@section('css')
    <style type="text/css">
        body {
            background: url('/images/hbg.jpg');
            color: gray;
        }
        .blank {
            padding-top: 50px;
            width: 80%;
            margin: 0 auto;
            text-align: center;
            font-size: 1.6em;
            line-height: 1.2em;
        }
        .blank img {
            opacity: .5;
            width: 6em;
            display: block;
            margin: 0 auto;
        }
        .button_sp_area {
            width: 100%;
            text-align: center;
        }
        .weui_btn {
            display: inline-block !important;
        }
        .weui-btn-mr {
            margin-right: 10px;
        }
    </style>
    @endsection
@section('content')
    <div id="nt">
        <div class="blank">
            <img src="/images/kuku.png">
            主人快去找点东西吧<br>
            购物车快饿瘪了
        </div>
        <div class="button_sp_area">
            <a href="/at/m" class="weui_btn weui_btn_plain_default weui-btn-mr">马上看看</a>
            <a href="/at/m/me" class="weui_btn weui_btn_plain_default">个人中心</a>
        </div>
    </div>
    @endsection