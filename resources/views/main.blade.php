@extends('layout.app')

@section('content')
    <main>
        <div class="containerContents">
            @foreach ($fumetti as $fumetto)
                <div class="cardFumetto">
                    <img src="{{$fumetto['thumb']}}" alt="">
                    <h6>{{$fumetto['title']}}</h6>
                </div>
                
            @endforeach
        </div>   
    </main>
@endsection