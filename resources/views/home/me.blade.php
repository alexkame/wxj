@extends('home.base')
@section('title', "个人中心")
@section('css')
    <style type="text/css">
        .user-container {
            width: 100%;
            height: 200px;
            text-align: center;
            position: relative;
            background: url(/images/me-bg.jpg);
        }
        .user-container-avatar {
            margin-top: 40px;
            width: 100px;
            height: 100px;
            border: 3px solid #ffffff;
            border-radius: 50%;

        }
        .user-container p {
            color: #ffffff;
        }
        .user-container a {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
    @endsection
@section('content')
    <div class="user-container">
        <img class="user-container-avatar" src="/images/guidi.jpg">
        <p>昵称：妮妮你您你</p>
        <p>幸运号：200564</p>
        <a href="javascript:;">编辑资料</a>
    </div>
    <div>
        <div>酒币</div>
        <div>当前积分</div>
        <div>会员</div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $("#a-me").attr("href", "javascript:;");
//        $("#me-img").attr("src", "/images/me-active.png");
        $("#a-me").css("background", "black");
    </script>
@endsection