@extends('home.base')
@section('title', "个人中心")
@section('css')
    <style type="text/css">
        body {
            margin-bottom: 76px;
            background: #eeeeee;
        }
        /*a:active {*/
            /*background: black !important;*/
            /*color: #ffffff !important;*/
        /*}*/
        .active {
            background: black !important;
            color: #ffffff !important;
        }
        .big-container {
            width: 100%;
        }
        .user-container {
            height: 160px;
            text-align: center;
            position: relative;
            background-color: #6F599C;
            /*background: url(/images/me-bg.png);*/
        }
        .user-container-avatar {
            /*margin-top: 40px;*/
            width: 80px;
            height: 80px;
            border: 3px solid #ffffff;
            border-radius: 50%;


        }
        .user-container p {
            font-size: .9em;
            color: #ffffff;
        }
        .user-container a {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #6EE5AB;
        }
        .show-container {
            text-align: center;
            display: flex;
            display: -webkit-flex;
            background: #ffffff;
            border-bottom: 1px solid #eee;
        }
        .show-item {
            flex: 1 0 0;
            margin: 10px 0;
        }
        .show-item:nth-child(2) {
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
        }
        .show-item p:first-child {
            color: black;
            font-size: 1.6em;
            line-height: 1.2em;
        }
        .show-container p:last-child {
            line-height: 1.2em;
            font-size: .8em;
        }
        .door-container a{
            display: block;
            color: black;
            background: #ffffff;
            padding: 10px 0;
            margin-bottom: 10px;
        }
        .door-container a>img {
            margin: 0 10px;
            width: 1.6em;
            vertical-align: bottom;
        }
        .door-container a>img:last-child {
            float: right;
            padding-top: .2em;
            width: 1.2em;
            vertical-align: middle;
        }
        .hot-link {
            background: #6F599C;
            color: #ffffff;
            width: 60%;
            margin: 0 auto;
            text-align: center;
            height: 2.4em;
            line-height: 2.4em;
            border-radius: 1.2em;
        }
    </style>
    @endsection
@section('content')
    <div class="big-container">
        <div class="user-container">
            <div style="width: 100%;text-align: center;bottom: 10px;position: absolute;">
                <img class="user-container-avatar" src="/images/guidi.jpg">
                <p>昵称：妮妮你您你</p>
                <p>幸运号：200564</p>
            </div>
            <a href="javascript:;">编辑资料</a>
        </div>
    </div>
    <div class="big-container">
        <div class="show-container">
            <div class="show-item">
                <p>1900.00</p>
                <p>钱包</p>
            </div>
            <div class="show-item">
                <p>2008</p>
                <p>当前积分</p>
            </div>
            <div class="show-item">
                <p>200</p>
                <p>会员 </p>
            </div>
        </div>
    </div>
    <div class="big-container">
        <div class="door-container">
            <a href="/at/m/me/orders">
                <img src="/images/icon-dingdan.png">全部订单<img src="/images/jiantou2.png">
            </a>
            <a href="javascript:;">
                <img src="/images/icon-huiyuan.png">我的会员<img src="/images/jiantou2.png">
            </a>
            <a href="javascript:;">
                <img src="/images/icon-youhuiquan.png">优惠券<img src="/images/jiantou2.png">
            </a>
            <a class="btn" href="javascript:;">
                <img src="/images/icon-dizhi.png">收货地址<img src="/images/jiantou2.png">
            </a>
        </div>
    </div>
    <div style="margin-top: 40px;" class="big-container">
        <div class="hot-link">客服热线 0760-20990206</div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $("#a-me").attr("href", "javascript:;");
//        $("#me-img").attr("src", "/images/me-active.png");
        $("#a-me").css("background", "black");
        $(".door-container a").bind('click', function () {
            $(this).addClass("active");
        });

    </script>
@endsection