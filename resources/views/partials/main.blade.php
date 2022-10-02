<main>
@foreach ($fumetti as $fumetto)
    <div class="cardFumetto">
        <img src="{{$fumetto['thumb']}}" alt="">
        <h6>{{$fumetto['title']}}</h6>
    </div>
    
@endforeach
</main>