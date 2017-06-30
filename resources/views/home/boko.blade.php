@extends('home.base')
@section('title', "我的业绩")
@section('content')

@endsection

@section('js')
    <script type="text/javascript">
        $("#a-boko").attr("href", "javascript:;");
//        $("#boko-img").attr("src", "/images/boko-active.png");
        $("#a-boko").css("background", "black");
    </script>
@endsection