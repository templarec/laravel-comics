<div class="container">
    @foreach($film as $card)
    <div class="card">

            <div class="cover">
                <img src="{{$card['thumb']}}" alt="image cover">
            </div>
            <div class="card-title">
                <span>{{$card['title']}}</span>
            </div>


    </div>
    @endforeach
</div>
