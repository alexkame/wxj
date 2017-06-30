@extends('home.base')
@section('title', "个人中心")
@section('content')

@endsection

@section('js')
    <script type="text/javascript">
        $("#a-me").attr("href", "javascript:;");
//        $("#me-img").attr("src", "/images/me-active.png");
        $("#a-me").css("background", "black");
    </script>
@endsection