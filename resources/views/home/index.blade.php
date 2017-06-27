@extends('home.base')
@section('title', '微小酒')
@section('css')
    <style>

        header input{height: 44px;width:100%;border-radius: 5px;outline: none;border:none;font-size: 20px;font-family: 黑体}
        header input:focus{border:2px solid black}
        header img{width:60px;}
        #searcher{position:relative;width:80%;display: inline-block;}
        #search{position:absolute;right:10px;width:36px;top:5px;}
    </style>
    @endsection
@section('content')
    <!--top-->
    <header class="text-center">
        <img src="/images/logo.png">
        <div id="searcher">
            <input name="search">
            <img id="search" src="/images/search.png" >
        </div>

    </header>
    <!--content-->
    <div id="content"></div>
    <!--bottom-->
    <div id="menu" class="menu">
        <div id="one" class="subMenu text-center" data-src="charger.html">
            <img class="menu_img" data-imgname="home"/>
            <div class="menu_name">首页</div>
        </div>
        <div id="two" class="subMenu text-center">
            <img class="menu_img" data-imgname="cart"/>
            <div class="menu_name">购物篮</div>
        </div>
        <div id="three" class="subMenu text-center" data-src="personal.html">
            <img class="menu_img" data-imgname="me"/>
            <div class="menu_name">个人中心</div>
        </div>
    </div>
    @endsection

@section('js')
    <script type="text/javascript">
        
    </script>
    @endsection
