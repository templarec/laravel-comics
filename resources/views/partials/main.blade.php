<main>
    <div class="container">
        <div class="floating-title">
            current series
        </div>
        @foreach($comic as $id => $card)
            <div class="card">

                <div class="cover">
                    <a href="{{route('detail', ['id' => $id])}}"><img src="{{$card['thumb']}}" alt="image cover"></a>

                </div>
                <div class="card-title">
                    <span>{{$card['title']}}</span>
                </div>


            </div>
        @endforeach
    </div>

</main>
