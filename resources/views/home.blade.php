@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2 card-container">
                <div class="img-container">
                    <img class="comic-cover" src="{{$comic['thumb']}}" alt="">
                </div>
              <span>{{$comic['title']}}</span> 
            </div>
            @endforeach

        </div>

        <div class="btn">
            <button class="btn-primary">
                LOAD MORE
            </button>
        </div>
    </div>
</main>

@endsection

@section('shop-section')

<div class="shop-section">
    <div class="container">
        <ul>
            @foreach($footer_links as $item)
            <li>
                <img :src="{{$item['img']}}" alt="">
                <a href="#">{{ $item['text'] }}</a>
            </li>

        </ul>
    </div>
</div>
   
@endsection

