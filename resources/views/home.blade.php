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



{{-- collegamento js --}}
{{-- @section('script')
    <script src="{{ Vite::asset('resources/js/script.js') }}"></script>
@endsection --}}
