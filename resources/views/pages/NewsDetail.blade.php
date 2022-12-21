@extends('HomeLayout')
@section('content')
<div class="body">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><ion-icon name="home-outline"></ion-icon> Home</a></li>
          <li class="breadcrumb-item"><a href="{{ URL::to('/news') }}">News</a></li>
          <li class="breadcrumb-item"><a href="">{{ $Newsdetail->title }}</a></li>
        </ol>
    </nav>
    <div class="container d-xl-flex newsdetail p-xl-5 p-3">
        <div class="col-xl-8 col-12">
            <img src="{{ asset('public/upload/'.$Newsdetail->images) }}">
            <div class="my-5">
                <h2>{{ $Newsdetail->title }}</h2>
                {!! $Newsdetail->content !!}
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">BÀI VIẾT MỚI</span></h4>
            <?php foreach ($listnews as $key => $value): ?>
            <?php if($value->id == $Newsdetail->id){continue;} ?>
            <div class="hotnews d-flex my-4">
                <div class="td-module-thumb mr-2">
                    <a href="{{ URL::to('newsdetail/'.$value->id) }}" class="td-image-wrap" >
                        <img src="{{ asset('public/upload/'.$value->images) }}">
                    </a>
                </div>
                <div class="item-details">
                    <h3 class="title text-over3"><a href="{{ URL::to('newsdetail/'.$value->id) }}">{{ $value->title }}</a></h3>           
                    <div class="td-module-meta-info"> 
                        <span class="td-post-date"><time class="">{{ date('H:i d/m/Y',$value->created_at) }}</time></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <hr/>
</div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/boxcss.scss')}}">
@endpush